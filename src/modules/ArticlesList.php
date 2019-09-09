<?php

namespace BoskeopolisLand;

class ArticlesList
{
	public static function getList() : array
	{
		return array_map( function( $item ) : Article { return new Article( $item ); }, self::DATA );
	}

	private const DATA =
	[
		[
			'name' => 'Brier Flier',
			'url' => 'https://www.mezunian.com/2019/09/08/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxvii-brier-flier/',
			'date' => '2019-09-08',
			'content' => '<div><iframe class="mezun-post-video" width="560" height="315" src="https://www.youtube.com/embed/MFd3cEmNsoo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
<p>Fun fact: when I 1st recorded this, this level’s name was spelled “Brier Flyer” ’cause I thought “flier” was 1 o’ those weird words that goes gainst the rules o’ English spelling just to mire me &amp; for some reason didn’t look it up. I just found this out as I started typing this &amp; saw my spellcheck yell @ me, just as how it yells @ me that “’nough” isn’t a true word, which is ridiculous. However, due to the way I recorded this video — I didn’t want to have to keep going through the motions @ the beginning, including waiting for long ’nough for viewers to be able to read the goal text, every attempt I made @ this level, so I just spliced 2 separate recordings together during the pause on the goal message screen, when everything’s silent — I was able to fix it in post.</p>
<p>I chose to just show this level off in 1 playthrough, getting just the gem score &amp; the diamond, since the automoving nature o’ this level makes the time score as easy as beating the level normally. It <em>is</em> possible to take too long, since the angles you turn in can make you go faster or slower.</p>'
		],
		[
			'name' => 'Petrol Pond Place',
			'url' => 'https://www.mezunian.com/2019/08/11/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxvi-petrol-pond-place/',
			'date' => '2019-08-11',
			'content' =>
				'<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/_P4Q1Tdvzt4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></div>
				<p>The main delay for this level was designer’s block. I knew I wanted a level with sunset harbor graphics, but I wasn’t sure what I wanted to do with such a level. Early on I decided on implementing oil water, which basically works like the water in “Rusty Bucket Bay” in <i>Banjo-Kazooie</i>: you lose oxygen faster &amp; don’t regain your oxygen till you return to land ( as opposed to just leaving water into the air, which only stops it from decreasing, but doesn’t replenish it ). But then I had trouble figuring out what to do with said oil water.</p>
				<p>Round that time I also wanted to have pipes you could walk through that maybe went down into the water & kept you oxygenated, but couldn’t figure out how to make it work well. This game uses block-based collision, & whole blocks were too thick for pipe walls. Plus, I wasn’t sure how to make them show you will the oil water still hid everything ’neath.</p>'
		],
		[
			'name' => 'Gravity, Hypocrisy, & the Perils o’ Being in 3D',
			'url' => 'https://www.mezunian.com/2019/06/24/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxv-gravity-hypocrisy-the/',
			'date' => '2019-06-24',
			'content' => '<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/fca3ArtesVI" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></div><p>I’m surprised this made it past the rejection bin. This started as an idle, silly idea that I planned to procrastinate to the sequel, ’specially due to the rigidity o’ this game engine, thanks to me to being a terrible programmer who was an e’en terribler programer when I started mo’ than 2 years ago. However, I figured out an easy way to do it by just adding some flags to hide all the blocks, make all the sprites invisible, &amp; then just create a background that draws everything seen in this level. This is thanks to the MapLayer class being ridiculously flexible: it’s basically just an update &amp; render virtual method.</p><p>This level &amp; associated classes all have “Doom” in their name, but they should truly be called “Wolfenstein3D”, as this level uses the much simpler raycasting method that that game uses, rather than <i>Doom</i>’s mo’ complicated ( &amp; mo’ powerful ) BSP trees. Raycasting works better for this game’s engine, as it works well with grid-based maps, which this game engine uses, whereas Doom’s system is based on lines which can be @ any angle ( &amp; thus can have walls that aren’t all @ 90° angles, as <i>Wolfenstein 3D</i> &amp; this game have ). That’s fine for me, since this is just 1 level &amp; it’s s’sposed to have a retro look. I can tell you that I’d worry ’bout how primitive the 16-pixel block textures ( smaller than <i>Wolfenstein</i>’s, actually, but the size o’ blocks in this Mario-inspired engine ) look stetched out before I worry ’bout perfectly square walls. Since this works well with grid-based maps, I can just use a regular grid-based map &amp; keep their usual behavior. This pseudo-3d gimmick is nothing mo’ than a visual gimmick o’er a normal isometric 2D level — basically just <a href="https://www.mezunian.com/2017/02/20/lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xiii/">“Maybe I’m a Maze”</a>, but with simpler, slower enemies that you can kill off. The walls are just regular solid blocks, the gems &amp; hearts are the same gem &amp; heart blocks used in all the other levels, &amp; thus I didn’t have to add any new behavior there. Only the hero, enemy, &amp; bullet sprites needed much new behavioral programming, &amp; that was mostly to handle moving in various angles.</p>'
		],
		[
			'name' => 'Through the Sharp Hawthorn Blow the Winds',
			'url' => 'https://www.mezunian.com/2019/05/27/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxiv-through-the-sharp-hawthor/',
			'date' => '2019-05-27',
			'content' => '<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/rhfrm1yeleo" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe></div><p>’Cause everyone loves wind gimmicks.</p><p>Those who have been paying attention to these posts since their earliest entries ( surely nobody ) would recall that I had been working on a level with this gimmick, forest theme, &amp; palette since near the start, but couldn’t be arsed to finish due to other levels shoving it aside. ’Cept for the longest time, ’twas called “Windy Woods”, which was too unbearably cliché for me ( &amp; “Gusty Glade” was already used by Rare ). Sick o’ so many Rareware alliteration names &amp; puns, I stuck with an age-ol’ Shakespeare quote, showing no regard for the fact that this level has no hawthorns, &amp; that such a name would better fit a bramble sky level than a forest level.</p>'
		],
		[
			'name' => 'Catahoneycombs',
			'url' => 'https://www.mezunian.com/2019/03/24/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxxiii-catahoneycombs/',
			'date' => '2019-03-24',
			'content' => '<div><iframe class="mezun-post-video" src="https://www.youtube-nocookie.com/embed/WsguvNfNth0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="500" height="315" frameborder="0"></iframe></div><p>I delayed this video ’cause I felt this level may have too much content — &amp;, in particular, too many gimmicks — for just 1 level &amp; considered splitting it into 2 levels, which would conflict with my theme system, since I already had 3 mine levels &amp; no other theme where this level would fit, e’en in a game that already stretched level themes beyond their logical boundaries ( quite a hefty problem for a game revolving round revolving level themes, which needs meaningful level themes for the cycling o’ said level themes to have meaning ).</p><p><a href="https://www.mezunian.com/2019/01/26/boskeopolis-land-lets-code-a-crappy-2d-platformer-like-millions-o-other-people-on-the-internet-lose-interest-give-up-only-a-few-months-in-part-xxxx/">I mentioned in an earlier post</a> that I prefer to have multiple li’l gimmicks in a level than 1 all-encompassing level gimmick so that the level doesn’t feel too 1-dimensional; however, too many gimmicks either bloat the level too long ( &amp; I feel most games have levels that are too long ) or leave some gimmicks underused, which I fear may happen here, particularly with the sticky floor gimmick. Other than a few places near the beginning that simply show without telling how sticky floors work without risk, the sticky ground is only used in 1 small section in the middle o’ the level challenging you to dodge Pufferbees while traversing sticky floor. This can be ’splained by the fact that I didn’t consider adding this gimmick till late in this level’s development: originally, this level went straight from that 1st platform with a white ant on it to the next.</p>'
		],
	];
}