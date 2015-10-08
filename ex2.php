<!DOCTYPE html>
<html ng-app>
<head>
<script src="https://
ajax.googleapis.com/ajax/libs/angularjs/
1.4.6/angular.min.js"></script>
 <meta charset="utf-8">
 <title>Angular</title>
</head>
<body ng-init="v=0">
    <p>Informe o valor em $: <input type="number" ng-model="v"></p>

 <p>Euro:  {{(v*0.9)}} </p>
 <p>Real:  {{(v*4.10)}} </p>
 
</body>
</html>

