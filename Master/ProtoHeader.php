<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="css/theme.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script>
				$(document).ready(function(){
					$("nav").click(function(){
						//$(this).css("background-color", "#922B21");
						//$(".userControl").css("background-color", "#922B21");
						$(this).toggleClass("navColor");
						$("div.userControl").toggleClass("userControlColor");
					});
				});
			</script>
