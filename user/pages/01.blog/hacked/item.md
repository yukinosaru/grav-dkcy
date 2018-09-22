---
# http://learn.getgrav.org/content/headers
title: Hacked!
slug: hacked
# menu: Hacked!
date: 21-08-2008
published: true
publish_date: 21-08-2008
# unpublish_date: 21-08-2008
# template: false
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration-status: review
    category: [The Rat Race]
    tag: []
author: admin
metadata:
    author: admin
#      description: Your page description goes here
#      keywords: HTML, CSS, XML, JavaScript
#      robots: noindex, nofollow
#      og:
#          title: The Rock
#          type: video.movie
#          url: http://www.imdb.com/title/tt0117500/
#          image: http://ia.media-imdb.com/images/rock.jpg
#  cache_enable: false
#  last_modified: true

---

**Thursday 21 August 2008, 10.10**  
*Sitting in bed, feeling smug*

So, I’m checking my site yesterday, as I sometimes do and am greeted with a rather random animation of sheep jumping a fence to some Allison Krauss. Now, don’t get me wrong, I’m a fan of random animation and indeed of ‘O Brother Where Art Thou’, but that’s not what I’ve come to expect from my own front page. I’ve never been hacked before and I have to say it was an unpleasant experience that left me feeling violated, yet I also found it strangely exhilarating – like a hidden assailant had slapped my face and thrown down the virtual gauntlet, daring me to figure out how they did it. So, never one to back down from a challenge, I duly got out my best deerstalker and began some detective work.

### Elementary, my dear Watson

First thing was to start from the evidence at the scene of the crime – checking the source code of the defaced page, I could see that it linked to another page. So I had a wee look (http://www.caprazates.org/ – not sure I should really give them the pleasure of a link, but hey) – which leads to a Turkish website (if anyone could translate, it would be much appreciated – Babelfish only goes so far!). Great, well now I knew my assailant’s identity, but it didn’t take me any further. So it was back to the drawing board.

Ok, so they’d basically changed my main template to show their stupid page. How had they done this? Well, it was one of 3 things:

1. I’d done something stupid and left permissions open for them to upload a file
2. My web hosts (<a>Easily</a>) had done something stupid and left a hold for them to upload a file
3. The CMS I’m using ([Joomla](http://www.joomla.org)) has a security hole

The most likely option to me, as an amateur systems administrator, was that I had done something stupid, but I thought I’d check Easily and Joomla’s forums for any indications. After some digging, I found out that there was indeed a security flaw with Joomla (http://developer.joomla.org/security/news/241-20080801-core-password-remind-functionality.html). Haha! Relieved it wasn’t my fault, I breathed a sigh of relief. Now to figure out what they did

Well I knew from the date of the defaced page that the perps (always wanted to use that word – CSI is an educational programme) were in around 16th August at 1.37am, so I checked my web logs and indeed found some miscreant had come in and messed stuff around. Without getting techy, they basically changed my password, logged into the site and changed the front page. Bastards.

### The moral of the story

So having solved the mystery of my hackage and the intellectual challenge, my thoughts turned to justice (actually, they turned to revenge first, but then I thought probably best not to take on people who do this sort of stuff – it’s a bit like poking a bully in the chest). In the absence of internet police, what could I do? I couldn’t have the person arrested. I couldn’t fine them. I couldn’t even ring them up and shout down the phone. All I could really do was email them a strongly worded message, which I didn’t really want to do in case they tried something nastier on my site. I felt like I’d been mugged, but had retrieved my belongings, so somehow that’s ok and my mugger could go on doing what they liked.

Thoughts drifted to self-pity – Why me? How did they find me? Was it random? Or was it a deliberate plot against me in particular? It turns out they had used Google to find a specific page on my site and then hacked in. They must have gone through hitting other sites on the list and I was just another. So I didn’t even have the dignity of being a specific target. I was just another anonymous site on the shopping list of someone with too much time on their hands.

So where did that leave me? I was on a hitlist, I’d been hit, but I knew what had happened and had fixed the problem. So now what? I now knew enough to go and hack someone else’s website. Oooh, the mischief I could cause… but NO, then I’d be as bad as them – worse even, cos I didn’t even come up with it myself. Instead, and in a small attempt to live up to Gandhian ideals, I decided I should beat this virtual sword into a ploughshare (although that’s a biblical quote, so I’m mixing my philosophy here!).

So, in ‘My Name is Earl’ style, I’m working through my list and letting them all know. If you’re running a site using Joomla 1.5, then I suggest you [upgrade to Joomla 1.5.6](http://www.joomla.org/announcements/release-news/5199-joomla-156-released.html) ASAP. And if you’re Mr/Mrs/Ms Turkish… get bent.