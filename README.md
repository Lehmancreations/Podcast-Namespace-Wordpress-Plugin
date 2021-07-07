# Podcast Namespace Wordpress Plugin
A plugin to add the podcast namespace to wordpress while using powerpress

# March 16th 2021 Emergency Update. 
Please update to version 1.3. Since Blubrry Updated Powerpress to include some of the namespace tags natively. They define the namespace and so did we. This was causing problems.
I have dropped from defining the namespace so they will work together. If you are on the latest powerpress please update to this version. I plan on keeping the all the episodic tags in this plug-in
because if you were using them and I take them out it will break old episodes that use the tags I have defined. However for show level things please make sure they are only defined in one place, so if you define them in this plugin please dont in powerpress, and likewise if you do them in powerpress dont do them here. For instance I had funding set in this plugin and in powerpress and it duplicated the tag.

# Instructions
To set the channel level item information there is a settings page under Settings->Podcast Namespace

To install please click [the latest release](https://github.com/Lehmancreations/Podcast-Namespace-Wordpress-Plugin/releases/latest) and download the zipped file named "Podcast-Namespace-Wordpress-Plugin.zip". Log into wordpress and click plugins and then add and upload to your wordpress installation. This plugin will not get automatically updated so you will want to watch this repo for updates. 

# We currently support the following tags:
## Channel Tags
* Locked
* Funding
* Contact (Currently only Feedback and Abuse)
* Location
* Podcast GUID
* Value block

## Item Tags
* Transcript (only json format, to use set a custom field on your post of "transcript" and a value of the url)
* Chapters (only json format, to use set a custom field on your post of "chapters" and a value of the url)
* Person (use the custom form in the post to set the people)
* Soundbite (use the custom form in the post to set the soundbites)
* Location
* Season
* Episode

If you get value from this plugin and want to toss a few dollars my way you can support the podcast I produce and Host, via paypal
[Support me](https://DudesAndDadsPodcast.com/paypal "Dudes And Dads Podcast Paypal")
