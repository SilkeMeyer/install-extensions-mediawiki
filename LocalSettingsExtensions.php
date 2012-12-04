require_once( "$IP/extensions/AbuseFilter/AbuseFilter.php" );
require_once( "$IP/extensions/AntiBot/AntiBot.php" );
require_once( "$IP/extensions/AntiSpoof/AntiSpoof.php" );
require_once( "$IP/extensions/ApiSandbox/ApiSandbox.php" );
require_once( "$IP/extensions/ArticleFeedback/ArticleFeedback.php" );
require_once( "$IP/extensions/AssertEdit/AssertEdit.php" );
require_once( "$IP/extensions/Babel/Babel.php" );
require_once( "$IP/extensions/CategoryTree/CategoryTree.php" );
require_once( "$IP/extensions/CentralNotice/CentralNotice.php" );
require_once( "$IP/extensions/CharInsert/CharInsert.php" );
require_once( "$IP/extensions/CheckUser/CheckUser.php" );
require_once( "$IP/extensions/Cite/Cite.php" );
require_once( "$IP/extensions/cldr/cldr.php" );
require_once( "$IP/extensions/ClickTracking/ClickTracking.php" );
require_once( "$IP/extensions/Collection/Collection.php" );
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
//require_once( "$IP/extensions/DismissableSiteNotice/DismissableSiteNotice.php" );
require_once( "$IP/extensions/EditPageTracking/EditPageTracking.php" );
require_once( "$IP/extensions/EmailCapture/EmailCapture.php" );
require_once( "$IP/extensions/ExpandTemplates/ExpandTemplates.php" );
require_once( "$IP/extensions/FeaturedFeeds/FeaturedFeeds.php" );
require_once( "$IP/extensions/FlaggedRevs/FlaggedRevs.php" );
require_once( "$IP/extensions/Gadgets/Gadgets.php" );
require_once( "$IP/extensions/GlobalBlocking/GlobalBlocking.php" );
require_once( "$IP/extensions/GlobalUsage/GlobalUsage.php" );
require_once( "$IP/extensions/ImageMap/ImageMap.php" );
require_once( "$IP/extensions/InputBox/InputBox.php" );
require_once( "$IP/extensions/Interwiki/Interwiki.php" );
require_once( "$IP/extensions/LocalisationUpdate/LocalisationUpdate.php" );
require_once( "$IP/extensions/MarkAsHelpful/MarkAsHelpful.php" );
require_once( "$IP/extensions/Math/Math.php" );
require_once( "$IP/extensions/MobileFrontend/MobileFrontend.php" );
require_once( "$IP/extensions/MoodBar/MoodBar.php" );
require_once( "$IP/extensions/MWSearch/MWSearch.php" );
require_once( "$IP/extensions/Nuke/Nuke.php" );
// OAI see below
require_once( "$IP/extensions/OpenSearchXml/OpenSearchXml.php" );
require_once("$IP/extensions/Oversight/HideRevision.php");
$wgGroupPermissions['oversight']['hiderevision'] = true;
$wgGroupPermissions['oversight']['oversight'] = true;
require_once( "$IP/extensions/PagedTiffHandler/PagedTiffHandler.php" );
require_once( "$IP/extensions/PageTriage/PageTriage.php" );
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
require_once( "$IP/extensions/PdfHandler/PdfHandler.php" );
require_once( "$IP/extensions/Poem/Poem.php" );
require_once( "$IP/extensions/PostEdit/PostEdit.php" );
require_once( "$IP/extensions/Renameuser/Renameuser.php" );
require_once( "$IP/extensions/SecurePoll/SecurePoll.php" );
require_once( "$IP/extensions/SimpleAntiSpam/SimpleAntiSpam.php" );
require_once( "$IP/extensions/SimpleSurvey/SimpleSurvey.php" );
require_once( "$IP/extensions/SiteMatrix/SiteMatrix.php" );
require_once( "$IP/extensions/SpamBlacklist/SpamBlacklist.php" );
require_once( "$IP/extensions/SwiftCloudFiles/SwiftCloudFiles.php" );
require_once( "$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php" );
require_once( "$IP/extensions/TitleBlacklist/TitleBlacklist.php" );
require_once( "$IP/extensions/TitleKey/TitleKey.php" );
require_once( "$IP/extensions/TorBlock/TorBlock.php" );
require_once( "$IP/extensions/TrustedXFF/TrustedXFF.php" );
require_once( "$IP/extensions/UploadBlacklist/UploadBlacklist.php" );
require_once( "$IP/extensions/UserDailyContribs/UserDailyContribs.php" );
require_once( "$IP/extensions/Vector/Vector.php" );
require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );
require_once( "$IP/extensions/wikihiero/wikihiero.php" );
require_once( "$IP/extensions/WikiLove/WikiLove.php" );
require_once( "$IP/extensions/WikimediaMessages/WikimediaMessages.php" );
require_once( "$IP/extensions/WikimediaShopLink/WikimediaShopLink.php" );
require_once( "$IP/extensions/ZeroRatedMobileAccess/ZeroRatedMobileAccess.php" );
# OAI repository for update server
@include( $IP.'/extensions/OAI/OAIRepo.php' );
$oaiAgentRegex = '/experimental/';
$oaiAuth = true; # broken... squid? php config? wtf
$oaiAudit = true;
$oaiAuditDatabase = 'oai';
# Oversight
require_once("$IP/extensions/Oversight/HideRevision.php");
$wgGroupPermissions['oversight']['hiderevision'] = true;
$wgGroupPermissions['oversight']['oversight'] = true;
# PoolCounter
require_once( "$IP/extensions/PoolCounter/PoolCounterClient.php" );
$wgPoolCounterConf = array(
    'Article::view' => array(
        'class' => 'PoolCounter_Client',
       /* ... any extension-specific options... */
    ),
); 
// Timeline
//require_once("$IP/extensions/timeline/Timeline.php"); // Add EasyTimeline extension
//$wgTimelineSettings->ploticusCommand = "/usr/bin/ploticus";
//$wgTimelineSettings->ploticusCommand = "/usr/bin/pl";
//$wgTimelineSettings->perlCommand = "/usr/bin/perl";

// ArticleFeedbackv5
$wgArticleFeedbackv5Categories = array( 'Foo_bar', 'Baz' );
$wgArticleFeedbackv5DashboardCategory = 'Foo_bar'; 
$wgArticleFeedbackBlacklistv5Categories = array( 'Baz' );
$wgArticleFeedbackv5Namespaces = array( NS_MAIN, NS_HELP, NS_PROJECT ); 
$wgArticleFeedbackv5MaxCommentLength = 400; 
