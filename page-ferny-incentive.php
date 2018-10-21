<?php
/**
* Template Name: Ferny Incentive
 */
?>

<?php

get_header();
?>
<br>

<br>
<section id="incMainDiv" class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10"><div id="incentiveHeader"><h1>INCENTIVE SYSTEM</h1></div>
		
		<div id="incentiveHeaderDesc">
			<i>It is a point system that aims to reflect the holistic formation and involvement of a member in the organization</i>
		</div>
		
		</div>
		<div class="col-md-1"></div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>

		<div class="col-md-5 incentiveDiv">

		<!--Original-->
		<!--
		<h6> Original </h6>
	
			<form id="bulletin-form">
				<div class="form-group">
					<input id="idtextbox" type="text" class="form-control formInput" name="idNumber" placeholder="ID NUMBER">
				</div>
			</form>
			<div class="verticalLine">
			</div>
			<div class="studentInfo" id="memberDetails">
				Last Name, First Name<br />
				Year - Course<br />
				<span id="eligibility"><i>Eligibility</i></span><br />
			</div>

			<ul class="circlesUL">
				<li>
				<div class="circle redCircle">
					<div id="circleText"></div>
				</div>
				</li>
				<li>
				<div class="circle whiteCircle">
					<div id="circleText"></div>
				</div>
				</li>
				<li>
				<div class="circle blueCircle">
					<div id="circleText"></div>
				</div>
				</li>
			</ul>
		-->
		<!--New-->

		<!-- 
			THE JAVASCRIPT PART (Start)
		-->
			<form id="theForm, bulletin-form">
    		    <div>
    		        <label title="Enter ID Number">
    		            <input class="form-control formInput" style="width: 300px;" id="key"  placeholder="Enter ID number"/>
    		        </label>
    		    </div>
    		</form>

  			<div id="output">
        		<div id="name"></div>

        		<div >
        			<div id="year" style="display: inline;" ></div>
        			<div id="dash" style="display: inline;" ></div>
        			<div id="course" style="display: inline;"></div>
        		</div>
        		
        		<div id="department"></div>

        		
        		<ul class="circlesUL">
					<li>
					<div class="circle redCircle">
						<div id="red"></div>
					</div>
					</li>
					<li>
					<div class="circle whiteCircle">
						<div id="white"></div>
					</div>
					</li>
					<li>
					<div class="circle blueCircle">
						<div id="blue"></div>
					</div>
					</li>
				</ul>

				<br>
				<br>

				<div id="eligibility" style="display: block;"></div>
    		</div>
		</div>

		<!-- 
			THE JAVASCRIPT PART (End)
		-->

		<div class="col-md-5 incentiveDiv">
			<div id="incentiveSubhead">How to earn stars?</div><br />
			<div id="incentiveSubDesc">These are based on your attendance, application & synthesis, and leadership & volunteerism.</div><br /><br />

			<ul class="incentiveUL">
				<li class="red">Red Star</li>
				<li class="indentList" id="listInfo"><i>project attendance</i></li>
				<li class="indentList">1 star= 1 project attended</li>
				<br />

				<li class="white">White Point</li>
				<li class="indentList" id="listInfo"><i>application and synthesis</i></li>
				<li class="indentList">1 star= 1 bucket-list task accomplished</li>
				<br />
				
				<li class="blue">Blue Point</li>
				<li class="indentList" id="listInfo"><i>leadership and volunteerism</i><br /></li>
				<li class="indentList">5 stars = Top 5 Machine Position</li>
				<li class="indentList">3 stars = Machine Position</li>
				<li class="indentList">2 stars = Core Team Position</li>
				<li class="indentList">1 stars = Project Volunteer/Facilitator</li>
				<br />
			</ul>

			<div id="incentiveSubhead">Why earn stars?</div><br />
			<div id="incentiveSubDesc">Holding a number of stars entitles you to certain privileges.</div><br /><br />

			<ul class="incentiveUL">
				<li class="default">Leadership Training Seminar</li>
				<li class="indentList" id="listInfo"><i>A 3-day out of town team building seminar that aims to develop both the existing and aspiring leaders of the organization</i></li>
				<li class="indentList">
					<ul class="circlesUL">
						<li class="indentCircle">
						<div class="circle redCircle1">
							<div id="circleText">10</div>
						</div>
						</li>
						<li>
						<div class="circle whiteCircle1">
							<div id="circleText">8</div>
						</div>
						</li>
						<li>
						<div class="circle blueCircle1">
							<div id="circleText">4</div>
						</div>
						</li>
					</ul>
				</li>
				<br />
			</ul>

			
		</div>

		<div class="col-md-1">
		</div>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js" type="text/javascript"></script>
<script src="fetchjson.js" type="text/javascript"></script>
<script src="incentive.js" type="text/javascript"></script>
<script type="text/javascript">


/* ------------------ CURRENT ------------------  */

let trackerData; // variable for main data

GetSheetDone.labeledCols('1GZLL0bdfmuIxmxxHokyhbgxU7LXLvPHWYyRi1C3Ih8Y', sheetNum = '2')
.then(response => {
	trackerData = response.data; // get sheet data and put it to main data
	console.log(trackerData); // working
});

jQuery(document).ready(function(){

	jQuery('#key').keypress(function(event){
		if(event.keyCode === 13)
		{
			jQuery('#name').empty();
			jQuery('#year').empty();
			jQuery('#dash').empty();
			jQuery('#course').empty();
			jQuery('#department').empty();
			jQuery('#red').empty();
			jQuery('#white').empty();
			jQuery('#blue').empty();
			jQuery('#eligibility').empty();
			
			//console.log("test");
			event.preventDefault();
			let member = searchIDNumber();
			//console.log(member);
			if (member != null)
			{
				jQuery('#name').append(member['name'] );
				jQuery('#year').append(member['yr'] );
				jQuery('#dash').append('-');
				jQuery('#course').append(member['course'] );
				jQuery('#department').append(member['department'] );
				jQuery('#red').append(member['red'] );
				jQuery('#white').append(member['white'] );
				jQuery('#blue').append(member['blue'] );

				/*
	
				*/

				if(member.eligibleforlts == "Y")
				{
					jQuery('#eligibility').append("Eligible for Leadership Training Seminar");
				}
				else
				{
					jQuery('#eligibility').append("Not eligible for anything");
				}
			}

			else
			{
				jQuery('#name').append("ID Number not recognized");
			}
		}
	});
	
	function searchIDNumber() {

		for(let member of trackerData)
		{
			if (member['idno.'] === jQuery('#key').val())
			{
				return member;
				break;
			}
		}

		return null;
	}

});

</script>

<style>
#incMainDiv {
padding-top: 6vh;
background-color: #ECECEC;
}

.post-inner {
width: 100%;
margin: 0px;
}

#red, #white, #blue {
	font-size: 18px;
	color: white;
	font-weight: bold;
}

li.indentList:before {
   background-color: #ECECEC;
}

#circleText {
	color: #ECECEC;
}

</style>


<?php get_footer()?>


<!-- END OF CODE -->

