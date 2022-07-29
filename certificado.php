 <?php



$con = mysqli_connect('localhost', 'congres4_utlvte', 'D4lQvcpAU*T2') or die("document.write('Error');");

mysqli_select_db($con,"congres4_utlvte") or die ("no database");


$correo=$_POST['correo'];
$password=$_POST['password'];

// Obtenemos, y validamo
// s enlace actual
if (!$correo || $correo == '') {
    die("Debe ingresar el correo");
}


if (!$password || $password == '') {
    die("Debe ingresar la contraseña");
}


// Obtenemos los datos de la base de datos
$sql = "SELECT archivo FROM certificado WHERE correo='$correo' and password='$password'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($query);

   // Comprobamos si el enlace ya esta en la base de datos
    $rows = mysqli_num_rows($query);
    if ($rows > 0) {
        // Cuando exista lo enlace actualizamos
            $archivo = ($row['archivo']) ; // Le sumamos uno para mostrar la visita actual
            echo "document.write($archivo);";
echo '<script type="text/javascript">
    window.open("'.$archivo.'");
</script>';

echo '<a href="'.$archivo.'" target="_blank">Click Me!</a>';
echo "<br><b> hola munod</b>";

        } else { // Si no se inserta la visita
            echo "document.write('No se ha encontrado  archivo');";
        }


// Por ultimo cerramos la conexion, y cerramos el script
mysqli_close($con);
die();
?>
