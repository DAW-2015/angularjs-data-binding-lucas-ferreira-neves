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
    
    <p>Nota de avaliação:<br> <input type="number" ng-model="v"> estrelas.</p>
    Comentario:<br><textarea ng-model="v2"></textarea>
    
     <p>Nota: {{(v)}} estrelas.<br/>Comentario: {{v2}}</p>
    
</body>
</html>