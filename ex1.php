<!DOCTYPE html>
<html ng-app>
<head>
<script src="https://
ajax.googleapis.com/ajax/libs/angularjs/
1.4.6/angular.min.js"></script>
 <meta charset="utf-8">
 <title>Angular</title>
</head>
<body ng-init="t=0">
 <p>Temperatura em c: <input type="text" ng-model="t"></p>

 <p>Farenheit:  {{(t/5*9) + 32}} </p>
 <p>Kelvin:  {{t*1+273}} </p>
 
</body>
</html>

