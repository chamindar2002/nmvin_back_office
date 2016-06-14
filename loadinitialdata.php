<?php
// Some utility functions
include_once "utils/pathmanager.php";


// Mandatory include directories
add_include_path("modules");
add_include_path("build/classes");

// Load the configuration file
include_once "config.php";
// Initialize Propel engine
include_once "utils/propel-init.php";


// For security checks
include_once "user/UserManager.php";


$um = UserManager::getInstance();


// Create test roles
$adminRole = $um->addNewRole("Admin", "Administrator");
$staffRole = $um->addNewRole("Staff", "A staff member");
$clientRole = $um->addNewRole("Manager", "A Manager");

// Administrator
$admin = $um->addNewUser("pinnacleadmin","Administrator","System", "FoxCIMA", true);
$um->addUserToRole($admin, $adminRole->getRid());


// User1
$staff = $um->addNewUser("user1","User1","Old", "user1098", true);
$um->addUserToRole($staff, $staffRole->getRid());

// User2
$staff = $um->addNewUser("user2","User2","Old", "user2098", true);
$um->addUserToRole($staff, $staffRole->getRid());


// Create test user accounts
//$client = $um->addNewUser("client","Test client user","ClientFamilyName", "098", true);
//$um->addUserToRole($client, $clientRole->getRid());
//
//
//$client = $um->addNewUser("client1","ClientFirstName1","ClientFamilyName1", "client1", true);
//$um->addUserToRole($client, $clientRole->getRid());
//
//
//$staff = $um->addNewUser("staff","StaffFirstName","StaffFamilyName", "staff", true);
//$um->addUserToRole($staff, $staffRole->getRid());


//$um->addUserToRole($client, $clientRole->getRid());
//$um->addUserToRole($staff, $staffRole->getRid());



// test data for room
//include_once "room/RoomManager.php";
//include_once "doctor/DoctorManager.php";
//include_once "flight/FlightManager.php";
//include_once "packageinfo/PackageInfoManager.php";
//include_once "travelagent/TravelAgentManager.php";
//$rm = RoomManager::getInstance();
  
//$rm->addNewRoom("009", Room::CATEGORY_GALLE_WING ,"blueppp"); 
//$rm->addNewRoom("019", Room::CATEGORY_MATARA_WING,"red");
//
//$rm = DoctorManager::getInstance();
//  
//$rm->addNewDoctor("10", "Dr.Senaka");
//$rm->addNewDoctor("15", "Dr.Nimal");
//
//$rm = TravelAgentManager::getInstance();
//  
//$rm->AddNewTravelAgent("90", "Paradox");
//$rm->AddNewTravelAgent("95", "Ranmini");
//
//$rm = PackageInfoManager::getInstance();
//  
//$rm->AddNewPackageInfo(23, "our","$",400,1);
//$rm->AddNewPackageInfo(23, "Foreign","$",1000,1);
//
//$rm = FlightManager::getInstance();
//  
//$rm->addNewFlight("356", "AirLanka");
//$rm->addNewFlight("558", "Indian");
// Create test package details
// include_once "packages/PackageManager.php"
//PackageManager::getInstance()->createNewPackage(...);

// Create test room categories


// Entering test clients
//include_once "client/ClientManager.php";


//$client = new Client();
//$client->setBirthday(strtotime("July 22, 2000"));
//$client->setStatus(Client::STATUS_FRAU);
//$client->setFamilyname("Testfamily");
//$client->setFirstname("Testfirstname");		
//$client->setStreet("Teststreet");		
//$client->setPostcode("testpostcode");		
//$client->setPlace("testpost");		
//$client->setCountry("Germany");		
//$client->setEmail("kamal@localhost");
////$client->setSkype();
//$client->setTelpvt("1234567890");
//$client->setTelmob("1234567890");
//$client->setTelbus("1234567890");
//$client->setFax("1234567890");
//$client->setProfession("testprof");
//$client->setGender(Client::GENDER_MALE);
//$client->setRepetitioncount(1);
//$newClient = ClientManager::getinstance()->addClientViaWeb($client);
//
//
//$client2 = new Client();
//$client2->setBirthday(strtotime(time()));
//$client2->setStatus(Client::STATUS_FRAU);
//$client2->setFamilyname("Testfamily2");
//$client2->setFirstname("Testfirstname2");		
//$client2->setStreet("Teststreet2");		
//$client2->setPostcode("testpostcode2");		
//$client2->setPlace("testpost2");		
//$client2->setCountry("Germany2");		
//$client2->setEmail("kamal@localhost");
////$client->setSkype();
//$client2->setTelpvt("12345678902");
//$client2->setTelmob("12345678902");
//$client2->setTelbus("12345678902");
//$client2->setFax("12345678902");
//$client2->setProfession("testprof2");
//$client2->setGender(Client::GENDER_MALE);
//$client2->setRepetitioncount(2);
//$newClient2 = ClientManager::getinstance()->addClientViaWeb($client2);


// Test email templates
//include_once("email/EmailManager.php");
//$em = EmailManager::getInstance();
//$em->addNewEmailTemplate("Birthday wishes", "Birthday wishes from Hotel Paragon", "Dear %status% %firstname% %familyname%,

//Many happy returns of the day!

//Hotel Paragon", true);

//$em->addNewEmailTemplate("Reservation confirmation", "Hotel Paragon: Reservation Confirmation #%clientno%", "Dear %status% %firstname% %familyname%,

//Your reservation has been confirmed. Come and enjoy our treatments.

//Looking forward to seeing you soon.

//Hotel Paragon", true);


echo "Loading initial data finished\n";

?>
