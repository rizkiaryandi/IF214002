# Ide Bisnis: Sistem Kontrol Keadaan Sungai dan Daerah Sekitarnya
[Plot](./ERD-Pertemuan-2.jpg)
## Deskripsi
Diwujudkannya aplikasi ini dibarengi dengan harapan dengan kehadiran aplikasi ini dapat memperbaiki kualitas sungai di Indonesia. Pada aplikasi ini meliputi,
### Mobile Petugas:
- Input laporan keadaan aliran ruas besar
- Input laporan keadaan aliran ruas kecil
- Input laporan keadaan aliran pemukiman penduduk
- Input laporan keadaan tanggul
- Input laporan dugaan pencemaran umum
- Input laporan dugaan pencemaran industri
- Input keadaan perangkat penunjang
- Profil petugas

### Web Administrator
- Dashboard utama
- Manajemen keadaan aliran ruas besar (Include spasial lokasi)
- Manajemen keadaan aliran ruas kecil (Include spasial lokasi)
- Manajemen keadaan aliran pemukiman penduduk (Include spasial lokasi)
- Manajemen laporan keadaan tanggul (Include spasial lokasi)
- Manajemen laporan dugaan pencemaran umum (Include spasial lokasi)
- Manajemen laporan dugaan pencemaran industri (Include spasial lokasi)
- Manajemen kualitas air (Include spasial lokasi)
- Manajemen keadaan titik pantau (CCTV/Camera FTP)
- Manajemen keadaan perangkat penunjang
- List Users
- Profil Administrator

## Entitas dan Atribut
### users
- (PK) user_id
- user_email
- user_password
- user_hint
- user_status
- created_at
- updated_at

### administrators
- (PK) administrator_id
- (FK) user_id
- administrator_name
- administrator_department
- administrator_phone
- administrator_img
- created_at
- updated_at

### unit
- (PK) unit_id
- unit_name
- unit_status
- created_at
- updated_at

### observer
- (PK) observer_id
- (FK) user_id
- observer_name
- observer_unit
- observer_region
- observer_phone
- observer_img
- created_at
- updated_at

### rivers
- (PK) river_id
- river_name
- river_geojson
- created_at
- updated_at

### creeks
- (PK) creek_id
- (FK) river_od
- creek_name
- creek_geojson
- created_at
- updated_at

### drains
- (PK) drain_id
- drain_name
- drain_geojson
- created_at
- updated_at

### dikes
- (PK) dike_id
- (FK) river_id
- (FK) unit_id
- dike_name
- created_at
- updated_at

### public_pollutions
- (PK) public_pollution_id
- (FK) observer_id
- public_pollution_title
- public_pollution_description
- public_pollution_longitude
- public_pollution_lattitude
- public_pollution_type
- public_pollution_img
- public_pollution_status
- created_at
- updated_at

### industry_pollutions
- (PK) industry_pollution_id
- (FK) observer_id
- industry_pollution_title
- industry_pollution_description
- industry_pollution_longitude
- industry_pollution_lattitude
- industry_pollution_type
- industry_pollution_img
- industry_pollution_status
- created_at
- updated_at

### support_devices
- (PK) support_device_id
- support_device_name
- support_device_description
- support_device_img
- created_at
- updated_at

### river_conditions
- (PK) river_condition_id
- (FK) observer_id
- (FK) river_id
- river_condition_description
- river_condition_longitude
- river_condition_lattitude
- river_condition_status
- river_condition_handling_status
- created_at
- updated_at


### creek_conditions
- (PK) creek_condition_id
- (FK) observer_id
- (FK) creek_id
- creek_condition_description
- creek_condition_longitude
- creek_condition_lattitude
- creek_condition_status
- creek_condition_handling_status
- created_at
- updated_at


### drain_conditions
- (PK) drain_condition_id
- (FK) observer_id
- (FK) drain_id
- drain_condition_description
- drain_condition_longitude
- drain_condition_lattitude
- drain_condition_status
- drain_condition_handling_status
- created_at
- updated_at


### dike_conditions
- (PK) dike_condition_id
- (FK) observer_id
- (FK) dike_id
- dike_condition_description
- dike_condition_longitude
- dike_condition_lattitude
- dike_condition_status
- dike_condition_handling_status
- created_at
- updated_at

