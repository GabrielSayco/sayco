<?php
// Datos de conexión a la base de datos
$servername = "DESKTOP-N7B9PQ8\SQLSAYCO";
$username = "sa";
$password = "saycorecuperacion2";
$dbname = "SaycoRecuperacion";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Numero_de_Credito = $_POST["Numero_de_Credito"];

    // Aquí puedes realizar operaciones con la base de datos, como consultar los datos relacionados con el número de crédito.

    // Ejemplo de consulta (sustituye esto con tu lógica)
    $sql = "SELECT * FROM CarteraBBVA WHERE Numero_de_Credito = '$Numero_de_Credito'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Realiza acciones con los resultados de la consulta
    } else {
        // No se encontraron resultados
    }
}

// Cierra la conexión
$conn->close();
?>
