<?php 
function showOption( $value )
{
	echo ucwords( $value );
}

function manifest()
{
    $manifest = [];

    header( 'Content-type: Application/json' );
    echo json_encode( $manifest );
}

function head()
{
    require_once templates.'general/header.php';
}

function foot()
{
    require_once templates.'general/footer.php';
}

function ahead()
{
    require_once templates.'general/aheader.php';
}

function afoot()
{
    require_once templates.'general/afooter.php';
}

function home()
{
    require_once templates.'home/basic.php';
}

function renderForm( $form )
{
    require_once templates.'forms/'.$form.'.php';
}

function loadImage( $src, $width, $height, $alt, $class )
{
	echo( '<img src="'.$src.'" width="'.$width.'" height="'.$height.'" alt="'.$alt.'" class="'.$class.'"' );
}

function archiveHeader( $type, $value = "blog" )
{
	echo( $type.$value );
}

function events( $request )
{
    $slug = $request[0];
    $event = $GLOBALS['events'] -> single( ['*'], [ 'slug' => $slug ], 'read' );
    require_once templates.'events/details.php';
}

function restful( $request )
{
	$table = $request[0];
	$payload = $GLOBALS[$table] -> fetch();
    header("Access-Control-Allow-Origin: *");
    header('Content-Type:Application/json' );
    echo json_encode( $payload );
}

function posts( $slug )
{
	$template = ( $slug == 'blog' ) ? 'blog/blog' : 'general/page';
	require_once templates.$template.'.php';
}

//LOOPY
/**
* Checks if app has records (users/posts/messages/comments/resources)
* @return bool
**/
function hasRecords()
{
	if ( $GLOBALS['grecord_index'] <= $GLOBALS['grecord_count'] ) {
		$GLOBALS['grecord_count'] = count( $GLOBALS['grecords'] )-1;
		return true;
	} else {
		$GLOBALS['grecord_count'] = 0;
		return false;
	}
}

/**
* @return false if there are no more records, or the record in the current index
* Increases the index by one
**/
function theRecord()
{
	if ( $GLOBALS['grecord_index'] > $GLOBALS['grecord_count'] ) {
		return false;
	}

	$GLOBALS['grecord'] = $GLOBALS['grecords'][ $GLOBALS['grecord_index'] ];
	$GLOBALS['grecord_index']++;
	
	return $GLOBALS['grecord'];
}

/**
* Resets the global records array and the index, allowing us to have more than one Loopy instance in the same php script and query different data types.
**/
function resetLoop( $results )
{
	$GLOBALS['grecords'] = $results;
	$GLOBALS['grecord'] = null;
	$GLOBALS['grecord_count'] = 0;
	$GLOBALS['grecord_index'] = 0;
}

/**
* Outputs the record name/title
**/
function theTitle()
{
	echo $GLOBALS['grecord']['title'];
}

/**
* Returns the unformatted record name/title
**/
function recordTitle()
{
	return $GLOBALS['grecord']['title'];
}

/**
* 
**/
function theSubTitle()
{
	echo $GLOBALS['grecord']['subtitle'];
}

/**
* Returns the unformatted record name/title
**/
function recordSubTitle()
{
	return $GLOBALS['grecord']['subtitle'];
}

/**
* Outputs a formatted link to the record's permalink, with specified text
* @param $text The text to output
@param $class Optional CSS class to stlyle the link
**/
function theLink( $text = "read more", $class = "" )
{
	echo ( '<a href="'.$GLOBALS['grecord']['link'].'" class = "'.$class.'" >'. $text . '</a>');
}

/**
* Returns unformatted record permalink
**/
function recordLink( )
{
	return $GLOBALS['grecord']['link'];
}

/**
* Outputs the content/details/description of the current record, 
* with all shortcodes added by addShortCode() function resolved.
**/
function theContent()
{
	echo htmlspecialchars_decode( $GLOBALS['grecord']['details'] );
}

/**
* Outputs parts of the content/details/description of the current record, 
* with all shortcodes added by addShortCode() function resolved.
**/
function theExcerpt( $length = 250 )
{
	echo htmlspecialchars_decode( substr(  $GLOBALS['grecord']['excerpt'], 0, $length ) );
}

/**
* Outputs the record's unique ID
**/
function theId()
{
	echo $GLOBALS['grecord']['id'];
}

/**
* Returns the record's unique ID
**/
function recordId()
{
	return $GLOBALS['grecord']['id'];
}

/**
* Outputs the record's type
**/
function theType()
{
	echo ucwords( $GLOBALS['grecord']['type'] );
}

/**
* Returns the record's type
**/
function recordType()
{
	return $GLOBALS['grecord']['type'];
}

/**
* Outputs the email address associated with current record
**/
function theEmail( $text = null )
{
	$text = !is_null( $text ) ? $text : $GLOBALS['grecord']['email'];
	echo ( '<a href="mailto:'.$GLOBALS['grecord']['email'].'" >'.$text.'</a>' );
}

/**
* Returns the email address associated with current record
**/
function recordEmail()
{
	return $GLOBALS['grecord']['email'];
}

/**
* Outputs the email address associated with current record
**/
function theGender()
{
	echo ucwords( $GLOBALS['grecord']['gender'] );
}

/**
* Returns the email address associated with current record
**/
function recordGender()
{
	return $GLOBALS['grecord']['gender'];
}

/**
* Outputs the social network associated with the current record 
**/
function theSocial( $network = "facebook" )
{
	$social = json_decode($GLOBALS['grecord']['social'], true );
	echo $social[$network];
}

/**
* Returns the author associated with current record
**/
function theAuthor( $class = "" )
{
	echo ( '<a class="'.$class.'" href="'.root.'/users/'.$GLOBALS['grecord']['author'].'">'.$GLOBALS['grecord']['author'].'</a>' );
}

/**
* Returns part of the name of the author of the current record
**/
function theAuthorIn( $count = null )
{
	if ( is_null( $count ) ) {
		$count = strlen($GLOBALS['grecord']['author_name'] );
	}
	echo ( substr( $GLOBALS['grecord']['author_name'], 0, $count ) );
}

/**
* 
**/
function theSlug()
{
	echo $GLOBALS['grecord']['slug'];
}
 
/**
* 
**/
function theCategories( $class = '' )
{
	$tags = $GLOBALS['grecord']['categories'];
	$type = $GLOBALS['grecord']['type'];
	$tags = explode(", ", $tags );
	$tagged = array(); 
	foreach ($tags as $tag ) {
		$tagged[] = '<a class="'.$class.'" href="'.root.'/categories/'.$tag.'/'.$type.'/">'.ucwords( $tag ).'</a>';
	}

	$tags = implode(' ', $tagged );
	echo $tags;
}

/**
* 
**/
function recordCategories( $type = 'article', $class = '' )
{
	$tags = $GLOBALS['grecord']['categories'];
	$type = $GLOBALS['grecord']['type'];
	$tags = explode(", ", $tags );
	$tagged = array(); 
	foreach ($tags as $tag ) {
		$tagged[] = $tag;
	}

	$tags = implode(' ', $tagged );
	echo $tags;
}

/**
* 
**/
function theTags( $class = "" )
{
	if ( isset( $GLOBALS['grecord']['tags'] )) {
		$tags = $GLOBALS['grecord']['tags'];
		$type = $GLOBALS['grecord']['type'];
		$tags = explode(", ", $tags );
		$tagged = array(); 
		foreach ($tags as $tag ) {
			$tagged[] = '<a class="'.$class.'" href="'.root.'/tags/'.$tag.'/'.$type.'/">'.ucwords( $tag ).'</a>';
		}

		$tags = implode(' ', $tagged );
		echo $tags;
	}
}

function theTemplate()
{
	echo( $GLOBALS['grecord']['template'] );
}

function recordTemplate()
{
	return $GLOBALS['grecord']['template'];
}

/**
* 
**/
function recordTags()
{
	$tags = $GLOBALS['grecord']['tags'];
	$tags = explode(", ", $tags );
	$tagged = array(); 
	foreach ($tags as $tag ) {
		$tagged[] = $tag;
	}

	$tags = implode(' ', $tagged );
	echo $tags;
}

/**
* 
**/
function theImage( $width = "100%", $height = "", $class = "featured-image" )
{
	echo ( '<img src = "'. $GLOBALS['grecord']['avatar'] .'" width = "'.$width.'" height ="'.$height.'" alt="Image for '.$GLOBALS['grecord']['title'].'" class="'.$class.'" >');
}

/**
* 
**/
function recordImage(){
	echo( $GLOBALS['grecord']['avatar'] );
}

/**
* 
**/
function theDate( $format = "D M d, Y" )
{
	$created = $GLOBALS['grecord']['created'];
	$timed = strtotime( $created );
	$formatted = date( $format, $timed );
	echo( $formatted );
}