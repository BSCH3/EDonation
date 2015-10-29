/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

       	
	$(document).ready(function() 
	{
		$("#lista1").als({
			visible_items: 5,
			scrolling_items: 2,
			orientation: "horizontal",
			circular: "yes",
			autoscroll: "yes",
			interval: 4000,
			direction: "left",
			start_from: 0
		});
	});
	function checkfriend()
	{
		if(document.searchFriend.title.value=='' || document.searchFriend.title.value=='Find a Fundraiser')
		{
			alert("Please enter search keyword.");
			document.searchFriend.title.focus();
			return false;
		}
		else
		{
		var txt = document.searchFriend.title.value;
		if(txt.length < 3)
			{
				alert("Please enter minimum 3 charecters.");
				document.searchFriend.title.focus();
				return false;
			}
		}
		
	}
	function checkfundraiser()
	{
		if(document.searchfundraiser.title.value=='' || document.searchfundraiser.title.value=='Find a Fundraiser')
		{
			alert("Please enter search keyword.");
			document.searchfundraiser.title.focus();
			return false;
		}
		else
		{
		var txt = document.searchfundraiser.title.value;
		if(txt.length < 3)
			{
				alert("Please enter minimum 3 charecters.");
				document.searchfundraiser.title.focus();
				return false;
			}
		}
	}
	function checkcharity()
	{
		if(document.searchcharity.title.value=='' || document.searchcharity.title.value=='Find a Charity')
		{
			alert("Please enter search keyword.");
			document.searchcharity.title.focus();
			return false;
		}
		else
		{
		var txt = document.searchcharity.title.value;
		if(txt.length < 3)
			{
				alert("Please enter minimum 3 charecters.");
				document.searchcharity.title.focus();
				return false;
			}
		}
	}
  

