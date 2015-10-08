<!DOCTYPE html>
<html ng-app>
<head>
<script src="https://
ajax.googleapis.com/ajax/libs/angularjs/
1.4.6/angular.min.js"></script>
 <meta charset="utf-8">
 <title>Angular</title>
</head>
<body >
    
    <p>Informe sua idade: <input type="number" ng-model="v"></p>
    
    <div>
        <p>Idade: {{::v}} </p><br/> Atençao sua idade será alterada automaticamente a partir da idade informada.
        
    </div>
    
</body>
</html>