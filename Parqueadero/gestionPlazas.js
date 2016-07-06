var appPlaza = angular.module('AppPlaza',[]);

function ControladorPlazas($scope){
    $scope.plazas=[
        {id:'p1',nombre:'Paruqeadero Expohostal', direccion:'Garcia Moreno 16-14 y Gerónimo carrión',nPlazas:'20',precio:'1.50'},
        {id:'p2',nombre:'Parqueadero Mitula Casas',direccion:'Miguel riofrio y 18 de Noviembre',nPlazas:'30',precio:'1.30'},
        {id:'p3',nombre:'Parqueadero Hotel Podocarpus',direccion:'Jose A. Eguiguren 16-50 entre 18 de Noviembre y Av. Universitaria',nPlazas:'24',precio:'1.70'}
    ];
    
    $scope.agregar=function(){
        $scope.plazas.push({id:$scope.id, nombre:$scope.nombre, direccion:$scope.direccion, nPlazas:$scope.nPlazas, precio:$scope.precio});
        $scope.formVisible=false;
        console.log($scope.formVisible);
    };
    
    $scope.ordenar=function(orden){
        $scope.ordenado=orden;
    };
    
    $scope.seleccionarEditar = function(id){
        var idPlaza = getSelectedIndex(id);
        var plaza = $scope.plazas[idPlaza];
        $scope.id = plaza.id;
        $scope.nombre = plaza.nombre;
        $scope.direccion = plaza.direccion;
        $scope.nPlazas = plaza.nPlazas;
        $scope.precio = plaza.precio;
    }
    
    $scope.editar = function(){
        var idPlaza = getSelectedIndex($scope.id);
        $scope.plazas[idPlaza].id = $scope.id;
        $scope.plazas[idPlaza].nombre = $scope.nombre;
        $scope.plazas[idPlaza].direccion = $scope.direccion;
        $scope.plazas[idPlaza].nPlazas = $scope.nPlazas;
        $scope.plazas[idPlaza].precio = $scope.precio;   
    }
    
    $scope.eliminar=function(id){
        var result = confirm('Está seguro de eliminar la plaza?');
        if (result == true){
            var idPlaza = getSelectedIndex(id);
            $scope.plazas.splice(idPlaza, 1);   
        }
	};
    
    function getSelectedIndex(id){
        for (var i=0;i<$scope.plazas.length;i++)
            if ($scope.plazas[i].id==id)
                return i;
        return -1;
        
    }
    
    function calcularPrecio(id){
        var idPlaza = getSelectedIndex(id);
        var prec = $scope.plazas[idPlaza].precio;
        return prec;
    }
    
    $scope.formVisible=false;
    
    $scope.ShowForm=function(){
        $scope.formVisible=true;
        console.log($scope.formVisible);
    };
    
}

appPlaza.controller('ControlAppPlazas',ControladorPlazas);
