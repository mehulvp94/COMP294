<?php
	header("Content-type: text/css");
?>

#main {
	color: '#0000ff';
}

h1 {
	color: black;
	font-weight: bold;
	text-align: center;
	text-decoration: underline;
	font-size: 60px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

table {
	broder-collapse: collapse;
	broder: none;
	border="1"
}

td {
	width: 156px;
	margin: 0;
	padding: 0;
}

td p {
	border: solid 1px black;
	padding: 5px 5px 2px 5px;
	margin: 0;
}

td s {
	margin 10px;
	}
	
table {
    width:50%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;
}
table#t01 tr:nth-child(even) {
    background-color: lightgray;
}
table#t01 tr:nth-child(odd) {
   background-color: white;
}
table#t01 th	{
    background-color: green;
    color: white;
}
 