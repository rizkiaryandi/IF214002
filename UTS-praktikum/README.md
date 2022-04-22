#### Nama   : Rizki Aryandi
#### NIM	  : 1207050110
-------------------------------------------

### UTS Praktikum
#### 1. Jelaskan contoh-contoh perintah SQL beserta kegunannya !
#### Jawab
###### Berikut adalah contoh perintah SQL menggunakan DBMS MySQL
- CREATE DATABASE: adalah perintah untuk membuat database. Contoh penggunaannya seprti "CREATE DATABASE mahasiswa"
- USE: adalah perintah pada MySQK untuk memilih database mana yang akan kita operasikan. Contoh: "USE mahasiswa"
- CREATE TABLE: adalah perintah untuk membuat tabel pada database. Contoh penggunaannya seperti "CREATE TABLE users ( //Isi Tabel Tersebut)"
- ALTER TABLE: adalah perintah untuk operasi pada kolom tabel, ALTER TABLE selalu diikuti oleh jenis operasi apa yang akan diberikan seperti ADD, MODIFY, REMOVE, dan lainnya. Contohnya: "ALTER TABLE users ADD ...."
- INSERT: adalah perintah untuk menginput data pada tabel. Contohnya, "INSERT INTO users ('..', '..', '..') VALUES ('..', '..', '..')"
- SELECT: adalah perintah untuk membaca data pada tabel, operasi ini lengkap dengan berbagai variasi seperti WHERE, LIKE, JOIN, CALL, dan lainnya.
- UPDATE: adalah perintah untuk mengupdate data pada tabel, biasanya dibarengi oleh WHERE untuk memilih data mana yang akan diedit. Seperti "UPDATE users SET ... = '...' WHERE .. = '..'"
- DELETE: adalah perintah untuk menghapus data pada tabel, biasanya dibarengi oleh WHERE untuk memilih data mana yang akan dihapus. Seperti "DELETE FROM users WHERE .. = '..'"
- CREATE PROCEDURE: adalah perintah untuk membuat prosedur. Prosedur sendiri ditujukan untuk dapat mengeksekusi beberapa tindakan dalam satu perintah CALL prosedur.
- CREATE FUNCTION: adalah perintah untuk membuat fungsi. Fungsi sendiri ditujukan pada kondisi tertentu dapat dieksekusi suatu tindakan seperti konversi bilangan bulat dan lainnya.
- CREATE TRIGGER: adalah perintah untuk membuat aksi trigger. Trigger sendiri adalah aksi yang akan diberikan pada saat tindakan seperti saat on insert, on update, on delete.
- COMMIT: Pada beberapa kondisi tertentu diperlukan commit guna eksekusi query dapat terlebih dahulu ditahan sebelum commit.
- ROLLBACK: Perintah ini dipakai ketika seandainya commit tidak jadi maka rollback adalah mengembalikan kondisi data kepada kondisi sebelumnya  

#### 2. Rancang solusi digital dari satu permasalahan yang ada di sekitar Anda. Berdasarkan ERD yang telah dibuat, buatlah implementasi basis data dari ERD tersebut dalam bentuk tabel basis data lengkap dengan Primary Key, Foreign Key dengan menggunakan perintah CREATE TABLE bahasa SQL. Anda dapat menggunakan vendor basis data yang Anda sukai (MySQL / PostgreSQL / SQL Server / dsb.). Jika belum sempat install basis data di laptop, bisa menggunakan sqliteonline.com untuk mengecek keberhasilan pembuatan tabelnya.

##### Jawab (Ket: FOREIGN KEY dipisahkan menggunakan ALTER. Query ada di paling bawah setelah semua CREATE Table)
Aplikasi Monitoring Keadaan Sungai dan Sekitarnya menggunakan DBMS MySQL. Alasan foreign keyn dipisahkan menggunakan alter adalah agar foreign key di add setelah seluruh tabel selesai dibuat.  
##### provinces
```sql
CREATE TABLE `provinces` (
  `prov_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `prov_name` varchar(255) DEFAULT NULL,
  `locationid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1
)
```

##### cities
```sql
CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `city_name` varchar(255) DEFAULT NULL,
  `prov_id` int(11) DEFAULT NULL
)
```
##### users
```sql
CREATE TABLE `users` (
  `user_id` varchar(6) NOT NULL PRIMARY KEY,
  `user_email` varchar(100) NOT NULL,
  `user_hint` varchar(20) NOT NULL,
  `user_status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```
##### administrators
```sql
CREATE TABLE `administrators` (
  `administrator_id` varchar(6) NOT NULL PRIMARY KEY,
  `user_id` varchar(6) NOT NULL,
  `administrator_name` varchar(100) NOT NULL,
  `administrator_phone` varchar(20) NOT NULL,
  `administrator_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```
##### observers
```sql
CREATE TABLE `observers` (
  `observer_id` varchar(6) NOT NULL PRIMARY KEY,
  `user_id` varchar(6) NOT NULL,
  `regional_unit_id` varchar(6) NOT NULL,
  `observer_name` varchar(50) NOT NULL,
  `observer_phone` varchar(20) NOT NULL,
  `observer_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```
##### regional_units
```sql
CREATE TABLE `regional_units` (
  `regional_unit_id` varchar(6) NOT NULL PRIMARY KEY,
  `main_administrator_id` varchar(6) NOT NULL,
  `city_id` int(11) NOT NULL,
  `regional_unit_name` varchar(50) NOT NULL,
  `regional_unit_address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```

##### support_devices
```sql
CREATE TABLE `support_devices` (
  `support_device_id` varchar(6) NOT NULL PRIMARY KEY,
  `regional_unit_id` varchar(6) NOT NULL,
  `support_device_name` varchar(50) NOT NULL,
  `support_device_description` text NOT NULL,
  `support_device_longitude` varchar(100) NOT NULL,
  `support_device_lattitude` varchar(100) NOT NULL,
  `support_device_type` enum('cctv','ftp','camera') NOT NULL,
  `support_device_link` text NOT NULL,
  `support_device_status` enum('active','crash','repair') NOT NULL,
  `support_device_username` varchar(255) NOT NULL,
  `support_device_password` varchar(150) NOT NULL,
  `support_device_port` varchar(20) NOT NULL,
  `last_updated_condition_by` varchar(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```

##### rivers
```sql
CREATE TABLE `rivers` (
  `river_id` varchar(6) NOT NULL PRIMARY KEY,
  `river_name` varchar(50) NOT NULL,
  `river_geojson` varchar(100) NOT NULL,
  `river_longitude` varchar(100) NOT NULL,
  `river_lattitude` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```

##### river_conditions
```sql
CREATE TABLE `river_conditions` (
  `river_condition_id` varchar(6) NOT NULL PRIMARY KEY,
  `observer_id` varchar(6) NOT NULL,
  `river_id` varchar(6) NOT NULL,
  `river_condition_description` text NOT NULL,
  `river_condition_longitude` varchar(100) NOT NULL,
  `river_condition_lattitude` varchar(100) NOT NULL,
  `river_condition_status` enum('safe','small_polluted','polluted','very_polluted') NOT NULL,
  `river_condition_handling_status` enum('not_handled','being_handled','already_handled','long_time_not_handled') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
)

```

##### creeks
```sql
CREATE TABLE `creeks` (
  `creek_id` varchar(6) NOT NULL PRIMARY KEY,
  `river_id` varchar(6) NOT NULL,
  `creek_name` varchar(50) NOT NULL,
  `creek_geojson` varchar(100) NOT NULL,
  `creek_longitude` varchar(100) NOT NULL,
  `creek_lattitude` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```
##### creek_conditions
```sql
CREATE TABLE `creek_conditions` (
  `creek_condition_id` varchar(6) NOT NULL PRIMARY KEY,
  `observer_id` varchar(6) NOT NULL,
  `creek_id` varchar(6) NOT NULL,
  `creek_condition_description` text NOT NULL,
  `creek_condition_longitude` varchar(100) NOT NULL,
  `creek_condition_lattitude` varchar(100) NOT NULL,
  `creek_condition_status` enum('safe','small_polluted','polluted','very_polluted') NOT NULL,
  `creek_condition_handling_status` enum('not_handled','being_handled','already_handled','long_time_not_handled','') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```

##### drains
```sql
CREATE TABLE `drains` (
  `drain_id` varchar(6) NOT NULL PRIMARY KEY,
  `drain_name` varchar(50) NOT NULL,
  `drain_geojson` varchar(100) NOT NULL,
  `drain_longitude` varchar(100) NOT NULL,
  `drain_lattitude` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```

##### drain_conditions
```sql
CREATE TABLE `drain_conditions` (
  `drain_condition_id` varchar(6) NOT NULL PRIMARY KEY,
  `observer_id` varchar(6) NOT NULL,
  `drain_id` varchar(6) NOT NULL,
  `drain_condition_description` text NOT NULL,
  `drain_condition_longitude` varchar(100) NOT NULL,
  `drain_condition_lattitude` varchar(100) NOT NULL,
  `drain_condition_status` enum('safe','small_polluted','polluted','very_polluted') NOT NULL,
  `drain_condition_handling_status` enum('not_handled','being_handled','already_handled','long_time_not_handled') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
)

```

##### dikes
```sql
CREATE TABLE `dikes` (
  `dike_id` varchar(6) NOT NULL PRIMARY KEY,
  `river_id` varchar(6) NOT NULL,
  `regional_unit_id` varchar(6) NOT NULL,
  `dike_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```

##### dike_conditions
```sql
CREATE TABLE `dike_conditions` (
  `observer_id` varchar(6) NOT NULL PRIMARY KEY,
  `dike_id` varchar(6) NOT NULL,
  `dike_condition_description` text NOT NULL,
  `dike_condition_longitude` varchar(100) NOT NULL,
  `dike_condition_lattitude` varchar(100) NOT NULL,
  `dike_condition_status` enum('safe','standby','alert','damaged') NOT NULL,
  `drain_condition_handling_status` enum('not_handled','being_handled','already_handled','long_time_not_handled') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```

##### public_pollutions
```sql
CREATE TABLE `public_pollutions` (
  `public_pollution_id` varchar(6) NOT NULL PRIMARY KEY,
  `observer_id` varchar(6) NOT NULL,
  `public_pollution_title` varchar(70) NOT NULL,
  `public_pollution_description` text NOT NULL,
  `public_pollution_longitude` varchar(100) NOT NULL,
  `public_pollution_lattitude` varchar(100) NOT NULL,
  `public_pollution_type` enum('non_hazardous_waste','light_waste','hazardous_waste','very_dangerous_waste') NOT NULL,
  `public_pollution_img` varchar(255) NOT NULL,
  `public_pollution_status` enum('not_handled','being_handled','already_handled','long_time_not_handled') NOT NULL,
  `public_pollution_action` text NOT NULL,
  `public_pollution_action_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```

##### industry_pollutions
```sql
CREATE TABLE `industry_pollutions` (
  `industry_pollution_id` varchar(6) NOT NULL PRIMARY KEY,
  `observer_id` varchar(6) NOT NULL,
  `industry_pollution_title` varchar(70) NOT NULL,
  `industry_pollution_description` text NOT NULL,
  `industry_pollution_longitude` varchar(100) NOT NULL,
  `industry_pollution_lattitude` varchar(100) NOT NULL,
  `industry_pollution_type` enum('non_hazardous_waste','light_waste','hazardous_waste','very_dangerous_waste') NOT NULL,
  `industry_pollution_img` varchar(255) NOT NULL,
  `industry_pollution_status` enum('not_handled','being_handled','already_handled','long_time_not_handled') NOT NULL,
  `industry_pollution_action` text NOT NULL,
  `industry_pollution_action_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)

```


##### ALTER FOREIGN KEY
```sql
ALTER TABLE `administrators`
  ADD CONSTRAINT `FK_USER_ADMINISTRATOR` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```

```sql
ALTER TABLE `creeks`
  ADD CONSTRAINT `FK_CREEKS_RIVER` FOREIGN KEY (`river_id`) REFERENCES `rivers` (`river_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```

```sql
ALTER TABLE `creek_conditions`
  ADD CONSTRAINT `FK_CREEK_CREEK_CONDITIONS` FOREIGN KEY (`creek_id`) REFERENCES `creeks` (`creek_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OBSERVER_CREEK_CONDITIONS` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```

```sql
ALTER TABLE `dikes`
  ADD CONSTRAINT `FK_DIKE_REGIONAL_UNIT` FOREIGN KEY (`regional_unit_id`) REFERENCES `regional_units` (`regional_unit_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DIKE_RIVER` FOREIGN KEY (`river_id`) REFERENCES `rivers` (`river_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```

```sql
ALTER TABLE `dike_conditions`
  ADD CONSTRAINT `FK_DIKE_DIKE_CONDITION` FOREIGN KEY (`dike_id`) REFERENCES `dikes` (`dike_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OBSERVER_DIKE_CONDITION` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```

```sql
ALTER TABLE `drain_conditions`
  ADD CONSTRAINT `FK_DRAIN_DRAIN_CONDITION` FOREIGN KEY (`drain_id`) REFERENCES `drains` (`drain_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OBSERVER_DRAIN_CONDITION` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```

```sql
ALTER TABLE `industry_pollutions`
  ADD CONSTRAINT `FK_OBSERVER_INDUSTRY_POLUTION` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```

```sql
ALTER TABLE `observers`
  ADD CONSTRAINT `FK_OBSERVER_REGIONAL_UNIT` FOREIGN KEY (`regional_unit_id`) REFERENCES `regional_units` (`regional_unit_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_USER_OBSERVER` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```

```sql
ALTER TABLE `public_pollutions`
  ADD CONSTRAINT `FK_OBSERVER_PUBLIC_POLUTION` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```

```sql
ALTER TABLE `regional_units`
  ADD CONSTRAINT `FK_MAIN_ADMINISTRATOR_REGIONAL_UNIT` FOREIGN KEY (`main_administrator_id`) REFERENCES `administrators` (`administrator_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```

```sql
ALTER TABLE `river_conditions`
  ADD CONSTRAINT `FK_OBSERVER_RIVER_CONDITION` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```

```sql
ALTER TABLE `support_devices`
  ADD CONSTRAINT `FK_LAST_UPDATE_SUPPORT_DEVICE` FOREIGN KEY (`last_updated_condition_by`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SUPPORT_DEVICE_REGIONAL_UNIT` FOREIGN KEY (`regional_unit_id`) REFERENCES `regional_units` (`regional_unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;


```