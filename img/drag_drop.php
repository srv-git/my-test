<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Draggable + Sortable</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <style>
  ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; }
  li { margin: 5px; padding: 5px; width: 150px; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable({
      //cancel:'.abc',
      //handle:'.dddd',
      revert: true
    });
    /*$( "#draggable" ).draggable({
      connectToSortable: "#sortable",
      helper: "clone",
      revert: "invalid"
    });*/
    //$( "ul, li" ).disableSelection();
  } );
  </script>
  <style type="text/css">
    .dddd{cursor: move;}
  </style>
</head>
<body>
<!--  
<ul>
<li id="draggable" class="ui-state-highlight">Drag me down</li>
</ul>
-->
<ul id="sortable">
  <li class="ui-state-default"><span class="dddd">drag me</span> <span class="abc">Item 1</span></li>
  <li class="ui-state-default"><span class="dddd">drag me</span> <span class="abc">Item 2</span></li>
  <li class="ui-state-default"><span class="dddd">drag me</span> <span class="abc">Item 3</span></li>
  <li class="ui-state-default"><span class="dddd">drag me</span> <span class="abc">Item 4</span></li>
  <li class="ui-state-default"><span class="dddd">drag me</span> <span class="abc">Item 5</span></li>
</ul>
 
 
</body>
</html>