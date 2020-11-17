<!DOCTYPE html>
<html>
<head>

	<title>Rick and Morty Web Api Retrieval</title>
	<style>
            @import url("css/styles.css");

     </style> 
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

		<h3> Please Select a number from the list to classify a Rick and Morty character!</h3>

		<select id="setId"> 
			<option> Select One </option>
	    </select> <br><br>


		 <img src="" class="img-fluid" id="characterImage"><br>
		Name: 	    <span id="name"></span><br><br>
		Status:     <span id="status"></span><br>
		Species:    <span id="species"></span><br>
		Type: 	    <span id="type"></span><br>
		Gender:     <span id="gender"></span><br><br>
		Location:   <span id="location"></span><br><br>
		Origin:     <span id="origin"></span><br><br>

		<button id="submit" class="set">Enter</button>

		<script>
		
			getNumber();

			$("#submit").on("click", async function()
			{
			let setId = $("#setId").val();
            let url = `https://rickandmortyapi.com/api/character/${setId}`;

            let response = await fetch(url);

            let data = await response.json();

            console.log(data);

            $("#characterImage").attr("src", data.image);
           	$("#name").html(data.name);
           	$("#status").html(data.status);
           	$("#species").html(data.species);
           	$("#type").html(data.type);
           	$("#gender").html(data.gender);
           	$("#location").html(data.location.name);
           	$("#origin").html(data.origin.name);
			});

			function getNumber()
			{

			var sel = document.getElementById('setId');

			for(var i = 1; i < 628; i++) 
			{
   		    var opt = document.createElement('option');
   			opt.innerHTML = [i];
    		opt.value = [i];
    		sel.appendChild(opt);
    		}

    	
}	
		</script>

</body>
<footer>
            <hr>
            CST 336 Internet Programming. 2020&copy; Sanchez <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictious. <br />
            It is used for academic purposes only. 
            <br>
</footer>
</html>
