
## About the medical system

A database schema implementation for a medical system

## Database Tables Created
- appointments
- lab_results
- medical_histories
- medical_practitioners
- medical_records
- patients
- users


## How to create a seeder
- Appointments Seeder : php artisan make:seeder AppointmentsTableSeeder
- Medical Practitioners : php artisan make:seeder MedicalPractitionersTableSeeder
- Lab Results : php artisan make:seeder LabResultsTableSeeder
- Medical History : php artisan make:seeder MedicalHistoriesTableSeeder
- Patients : php artisan make:seeder PatientsTableSeeder
- MedicalRecords : php artisan make:seeder MedicalRecordsTableSeeder
- UserRecords : php artisan make:seeder UsersTableSeeder

## Running seeders
php artisan db:seed --class=PatientsTableSeeder
php artisan db:seed --class=AppointmentsTableSeeder
php artisan db:seed --class=LabResultsTableSeeder
php artisan db:seed --class=MedicalHistoriesTableSeeder
php artisan db:seed --class=PatientsTableSeeder
php artisan db:seed --class=MedicalRecordsTableSeeder
php artisan db:seed --class=MedicalPractitionersTableSeeder
php artisan db:seed --class=UsersTableSeeder

## How to run the project 
- php artisan serve
- php artisan migrate ( this will generate all the database tables )
- run all the database seeders ( follow commands mentioned above )
- check the database for the data that has been populated to the medical software

## Testing the relationships
## Get all medical records for a specific patient
- $patient = \App\Models\Patient::find(1);
- medical_records = $patient->medical_records;
