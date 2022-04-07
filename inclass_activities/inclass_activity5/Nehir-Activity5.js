var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("add").onclick = addScore;
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("name").focus();
};

function displayResults()
{
	var average = 0;
	for(var i=0;i<scores.length;i++)
	{
		average = (average*(i)+scores[i])/(i+1);

	}
	document.getElementById("results").innerHTML="<h2> Results </h2><p> Average score is "+average + "</p> " + "<p> Highest score is " + Math.max(...scores) + " </p>" 
}

function addScore(){
	var score = parseInt($("score").value)
	var name = $("name").value
	if(validateScore(score) && name !== ""){
		names.push($("name").value) 
		scores.push(parseInt($("score").value))
	}
	else{
		alert("You must enter a name and a valid score")
	}
	// clear input fields
	$("name").value = ""
	$("score").value = ""
	// cursor
	$("name").focus();
	
}

function displayScores(){
	document.getElementById("scores_table").innerHTML = "<h2>Scores</h2> <tr> <th> Name </th> <th> Score </th> </tr>"

	for(var i=0;i<scores.length;i++)
	{
		document.getElementById("scores_table").innerHTML +=" <tr> <td> " + names[i] + " </td> <td> " + scores[i] + " </td> </tr>" 
	}
	
}

// helper function to validate score
function validateScore(score){
	if(Number.isInteger(score)){
		if(score <= 100 && score >= 0){
			return true;
		}
		return false;
	}
	return false;
}