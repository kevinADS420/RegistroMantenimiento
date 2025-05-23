fetch('http://localhost/Registro_de_Mantenimiento_UGCA/backend/api/mantenimientos/listar.php')
  .then(response => response.json())
  .then(data => {
    console.log('Mantenimientos:', data);
  })
  .catch(error => console.error('Error al obtener mantenimientos:', error));
