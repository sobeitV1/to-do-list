// запросы с html страницы
$text_task = $_POST['task_input'];
$kategory = $_POST['kat'];

// подключение к БД
$servername = "localhost";
$username = "tack_menager";
$password = "f#iD76cau";
$base_dann = "tack_manager";
$connect = new mysql($servername, $username, $password, $base_dann);

// проврека подключения
if ($conn->connect_error) {
	die("Ошибка подключения: " . $conn->connect_error)
}

// создания таблиц
$bd_tasks = "CREATE TABLE tasks (
id int(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
task varchar(1000) CHARACTER SET utf32 NOT NULL,
karegory text,
day_delivery date
)";

$bd_perform = "CREATE TABLE perform(
id int(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
task varchar(1000) CHARACTER SET utf32 NOT NULL,
karegory text,
day_delivery date
)"

$bd_delete = "CREATE TABLE delete(
id int(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
task varchar(1000) CHARACTER SET utf32 NOT NULL,
karegory text,
month text
week text
day text
)";


// проверка создания таблиц
if ($conn->query($bd_tasks) and $conn->query($bd_perform) and $conn->query($bd_delete) ) {
   echo "База данных создана успешно";
} else {
   echo "Ошибка создания базы данных: " . $conn->error;
}