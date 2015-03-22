/* 
 * brief\ 2 Implementations of Kuppuswamy’s socioeconomic status scale revised
 *        version by D. Mishra1 Contact and H. P. Singh. One in Pure Javascript
 *        and one using jQuery
 * file\ p91_scoring_kuppuswamy.js
 * interface\ specified per function
 *
 * function scorejQueryKuppuswamy(oEducational, oOccupation, oMonthlyIncome, oScore, oScoreInterpret)
 * vars\ oEducational\   Element id for the Element Specifying the Educational Data
 *                       as an Integer specified as #idName
 *      oOccupation\     Element id for the Element Specifying the Occupation Data
 *                       as an Integer specified as #idName
 *      oMonthlyIncome\  Element id for the Element Specifying the Income Data
 *                       as an Integer specified as #idName
 *      oScore\          Element id for the Element which shall bear the Numeric Score
 *                       as an Integer specified as #idName
 *      oScoreInterpret\ Element id for the Element which shall bear the Scale
 *                       result as a String specified as #idName
 *
 * function scoreKuppuswamy(oEducational, oOccupation, oMonthlyIncome, oScore, oScoreInterpret)
 * vars\ oEducational\   Element id for the Element Specifying the Educational Data
 *                       as an Integer specified as idName
 *      oOccupation\     Element id for the Element Specifying the Occupation Data
 *                       as an Integer specified as idName
 *      oMonthlyIncome\  Element id for the Element Specifying the Income Data
 *                       as an Integer specified as idName
 *      oScore\          Element id for the Element which shall bear the Numeric Score
 *                       as an Integer specified as idName
 *      oScoreInterpret\ Element id for the Element which shall bear the Scale
 *                       result as a String specified as idName

 */

function scorejQueryKuppuswamy(oEducational, oOccupation, oMonthlyIncome, oScore, oScoreInterpret)
{
  var iScore;
  var sScoreInterpretation;

  var iEducational = 0;
  var iOccupation = 0;
  var iMonthlyIncome = 0;

  if ($(oEducational).value > 0)
    {
	iEducational = $(oEducational).value;
    }
  
  if ($(oOccupation).value > 0)
    {
	iOccupation = $(oOccupation).value;	  
    }

  if ($(oMonthlyIncome).value > 0)
    {
	iMonthlyIncome = $(oMonthlyIncome).value;
    }
  
  iScore = iEducational + iOccupation + iMonthlyIncome;


  if (iScore > 25)
  {
	sScoreInterpretation = "Upper";
  }

  if (iScore < 26)
  {
	sScoreInterpretation = "Upper Middle";
  }

  if (iScore < 16)
  {
	sScoreInterpretation = "Lower Middle";
  }

  if (iScore < 11)
  {
	sScoreInterpretation = "Upper Lower";
  }

  if (iScore < 5)
  {
	sScoreInterpretation = "Lower";
  }

  $(oScore).value = iScore;

  $(oScoreInterpret).value = sScoreInterpretation;

}

function scoreKuppuswamy( oEducational, oOccupation, oMonthlyIncome, oScore, oScoreInterpret)
{
  var iScore = 0;
  var sScoreInterpretation ='NA';

  var iEducational = 0;
  var iOccupation = 0;
  var iMonthlyIncome = 0;

  if (document.getElementById(oEducational).value > 0)
    {
	iEducational = parseInt(document.getElementById(oEducational).value);
	
    }

  if (document.getElementById(oOccupation).value > 0)
    {
	iOccupation = parseInt(document.getElementById(oOccupation).value);
	
    }

  if (document.getElementById(oMonthlyIncome).value > 0)
    {
	iMonthlyIncome = parseInt(document.getElementById(oMonthlyIncome).value);
	
    }

  iScore = iEducational + iOccupation + iMonthlyIncome;


  if (iScore > 25)
  {
	sScoreInterpretation = "Upper";
  }

  if (iScore < 26)
  {
	sScoreInterpretation = "Upper Middle";
  }

  if (iScore < 16)
  {
	sScoreInterpretation = "Lower Middle";
  }

  if (iScore < 11)
  {
	sScoreInterpretation = "Upper Lower";
  }

  if (iScore < 5)
  {
	sScoreInterpretation = "Lower";
  }

  document.getElementById(oScore).value = iScore;

  document.getElementById(oScoreInterpret).value = sScoreInterpretation;

}