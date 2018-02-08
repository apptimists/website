---
extends: _layouts.post
title: What happend so far?
author: Johannes Berdin
gravatar: https://secure.gravatar.com/avatar/7bfdf8bd06bad121d9766b64617a1499
personal: http://johannesberdin.de
date: 2018-02-09
category: Super awesome time
section: content
---

You have never read an article by the apptimists because this is actually the first one. But like I started programming around the millenium I'll give it a try. Hopefully I'll learn nice techniques or find some writing frameworks to share some of our thoughts in a manner that you are not bored after the first sentence.

If you've never heard of the apptimists we specialized in building small applications mostly in the fields of location-based services, advocating startups in the region of [Saarland](https://www.saarland.de) and contributing to some open-source projects. We are a pretty small team of nerds and the creators of [StauMobil](https://www.staumobil.com). The free app for iOS and Android shows traffic incidents like congestions, constructions and road closures in Germany and is being used by more than 4 million times in the end of 2017.

This is the first article of an undetermined number of writings about the unfiltered, uncensored and unsparing time at the apptimists, in short: we are going to share our journey for the almost last 7 years. So fasten your seatbelt, lean back and enjoy!

## Episode 1: The beginning

It all started in 2011 when Andreas (short: Andy), Dominik (short: Domme) and I studied Computer Science at the Saarland University.
To give a short historical background. These are five facts from that year:
- Apple released the iPhone 4s
- CERN scientists found neutrinos which are 60 nanoseconds quicker than light
- Microsoft launched its cloud-based service Office 365
- You got some Ice Cream Sandwich with Google's Android 4.0
- The world population reached 7 billion inhabitants

Like all students we loved to party but there was no platform where you could check what's going on in your location and we set out to fill that gap in information retrieval for party people like us - I'm actually not quite sure if there is such an app out now.

It was an amazing time talking to club owners, event organizers, friends and family but as complete rookies in starting a business, doing sales & promotion and building a complex piece of software we did face a typical problem all online platforms do have:

### The Hen-Egg-Problem

Actually there are *just* two questions we had to answer:
- How to attract people to use our app if there is no relevant data for them yet?
- How to bring (other) people to the platform to provide that data?

So we came up with the idea to aggregate all party event information on the web we could find put them in a database, enrich them with some data mining, geolocate them and provide a neatly list of parties all over the country within an app for iOS and Android. Sounds tough? It was! I would say that this is the engineer's path of solving such a problem and we could have come up with some other ways like creating **demand** for such an app by a convincing presentation and generating traffic to a landing page through cool web ads, awesome club tours and sending weekly update mails to the audience. That's a classical sales funnel for consumer-facing products and it had tremendously reduced consumption of resources at product development - or rather data collection.

<div class="post-image">
  <img class="img-responsive" src="/img/posts/1/nerds-in-paris.jpg" alt="On our way to the EIT ICT Labs in Paris" width="1024" height="765">
  <span class="img-caption">"Nerds in Paris" - On our way to EIT ICT Labs</span>
</div>

Why is demand the only bold word in this article? It will sound like a truism but it's most important to not overshoot your idea and focus on functionality your users want. I saw so much must-have features on our roadmap we did not double-check with the people and we spend hours in implementation and testing just to shut them down in the next update. I do not say to not build something you like. That should be the number one motivation to work on your idea. But beside the fact that you will not make any money out of that useless feature it is demotivating in not getting the expected respect for your work.

I think we did a good job in crawling the web for event information but still had to tackle the business part of our idea and how shall I put it. Our first cold calls were frustrating. Probably even more frustrating for the people on the other end of the line, haha:

> Hey, we are Andy, Domme and Johnny, we have that idea!

Beep beep beep! It's definitely more professional to have a good name so we switched our intro and that's where our project Moveyaa and later the apptimists were born.

Alright folks I hope you enjoyed reading the first episode - others will follow. I'll upload some code samples on GitHub to demonstrate how we wired together Facebook's [Graph API](https://developers.facebook.com/docs/graph-api/reference/event/) to get events.

Would be pleasure to have a chat with you, so feel free to contact us!
