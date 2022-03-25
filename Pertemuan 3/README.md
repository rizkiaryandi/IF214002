# Ide Bisnis: Sistem Pengontrolan Sungai dan Sekitarnya
![ERD (SVG)](./erd.svg)
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

### provinces
- (PK) province_id integer(11) not null
- province_name character varrying(70) not null

## cities
- (PK) city_id integer(11) not null
- (FK) province_id integer(11) <=> provinces[ province ]
- city_name character varrying(70)

### regional_units
- (PK) regional_unit_id character varrying(6) not null
- (FK) main_administrator_id <=> users[ user_id ] 
- (FK) city_id <=> cities[ city_id ]
- regional_unit_name character varrying(50) not null
- regional_unit_address text
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### users
- (PK) user_id character varrying(6) not null
- (Unique) user_email character varrying(100) not null
- user_password character varrying(200)
- user_hint character varrying(20)
- user_status enum(active, inactive)
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### administrators
- (PK) administrator_id character varrying(6) not null
- (FK) user_id <=> users[ user_id ] 
- administrator_name character varrying(50) not null
- administrator_phone character varrying(20)
- administrator_img character varrying(255)
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### unit
- (PK) unit_id character varrying(6) not null
- unit_name character varrying(50) not null
- unit_status
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### observer
- (PK) observer_id character varrying(6) not null
- (FK) user_id <=> users[ user_id ] 
- (FK) unit_id <=> units(unit_id)
- observer_name character varrying(50) not null
- observer_phone character varrying(20)
- observer_img character varrying(255)
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### rivers
- (PK) river_id character varrying(6) not null
- river_name character varrying(50) not null
- river_geojson characted varrying(100)
- river_longitude character varrying(100)
- river_lattitude character varrying(100)
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### creeks
- (PK) creek_id character varrying(6) not null
- (FK) river_id <=> rivers[ river_id ] 
- creek_name character varrying(50) not null
- creek_geojson characted varrying(100)
- creek_longitude character varrying(100)
- creek_lattitude character varrying(100)
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### drains
- (PK) drain_id character varrying(6) not null
- drain_name character varrying(50) not null
- drain_geojson characted varrying(100)
- drain_longitude character varrying(100)
- drain_lattitude character varrying(100)
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### dikes
- (PK) dike_id character varrying(6) not null
- (FK) river_id <=> rivers[ river_id ] 
- (FK) unit_id <=> units[ unit_id ] 
- dike_name character varrying(50) not null
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### public_pollutions
- (PK) public_pollution_id character varrying(6) not null
- (FK) observer_id  <=> observers[ oberserver_id ] 
- public_pollution_title character varrying(70)
- public_pollution_description text
- public_pollution_longitude character varrying(100)
- public_pollution_lattitude character varrying(100)
- public_pollution_type
- public_pollution_img character varrying(255)
- public_pollution_status
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### industry_pollutions
- (PK) industry_pollution_id character varrying(6) not null
- (FK) observer_id <=> observers[ observer_id ] 
- industry_pollution_title character varrying(70)
- industry_pollution_description text
- industry_pollution_longitude character varrying(100)
- industry_pollution_lattitude character varrying(100)
- industry_pollution_type
- industry_pollution_img character varrying(255)
- industry_pollution_status
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### support_devices
- (PK) support_device_id character varrying(6) not null
- support_device_name character varrying(50) not null
- support_device_description text
- support_device_img character varrying(255)
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

### river_conditions
- (PK) river_condition_id character varrying(6) not null
- (FK) observer_id <=> observers[ observer_id ]
- (FK) river_id <=> rivers[ river_id ]
- river_condition_description text
- river_condition_longitude character varrying(100)
- river_condition_lattitude character varrying(100)
- river_condition_status enum(active, inactive)
- river_condition_handling_status enum(not_handled, being_handled, already_handled, long_time_not_handled)
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()


### creek_conditions
- (PK) creek_condition_id character varrying(6) not null
- (FK) observer_id <=> observers[ observer_id ] 
- (FK) creek_id <=> creeks[ creek_id ] 
- creek_condition_description text
- creek_condition_longitude character varrying(100)
- creek_condition_lattitude character varrying(100) character varrying(100)
- creek_condition_status enum(active, inactive)
- creek_condition_handling_status enum(not_handled, being_handled, already_handled, long_time_not_handled)
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()


### drain_conditions
- (PK) drain_condition_id character varrying(6) not null
- (FK) observer_id <=> observers[ observer_id ] 
- (FK) drain_id <=> drains[ drain_id ] 
- drain_condition_description text
- drain_condition_longitude character varrying(100)
- drain_condition_lattitude character varrying(100)
- drain_condition_status enum(active, inactive)
- drain_condition_handling_status enum(not_handled, being_handled, already_handled, long_time_not_handled)
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()


### dike_conditions
- (PK) dike_condition_id character varrying(6) not null
- (FK) observer_id <=> observers[ observer_id ] 
- (FK) dike_id <=> dikes[ dike_id ] 
- dike_condition_description text
- dike_condition_longitude character varrying(100)
- dike_condition_lattitude character varrying(100)
- dike_condition_status
 enum(active, inactive)- dike_condition_handling_status enum(not_handled, being_handled, already_handled, long_time_not_handled)
- created_at timestamp without timezone default current_timestamp()
- updated_at timestamp without timezone default on update current_timestamp()

