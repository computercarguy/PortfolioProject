# PortfolioProject
Multiple versions of my online portfolio site in different tech stacks.

Various recruiters and managers ask me what programming languages I know. Well, I know a lot of them, so then they ask me to provide them with examples. Unfortunately, most of what I write is proprietary for the businesses I work for. Most of the rest of the code is for projects I'm trying to write to make money, so I don't have a lot to show off.

Until now.

Well, sort of.

Let me back up a bit. I have a 6 page resume. That's a lot of information packed in there, but it doesn't cover everything I know or have done, and the format of a resume doesn't prove that I know how to write code, or really anything else. It's just a piece of paper that people can either believe or not, and I don't have much control over that.

So I wrote a website to help display some of my projects. But that was kind of limiting, too. I didn't have examples of all the kind of projects I've written, or even all the languages I know or the ways I've used them.

So now, with this project, I'm trying to fix at least some of that. I'm adding projects to the site. I've rearranged things. I've added a list of online profiles where I've done training, written code for puzzles, answered programming questions, posted games I've written, and some other relevant profiles.

The most significant thing I'm doing is rewriting the site. Not just from scratch, but multiple versions of the same site in different languages. Granted, I reused a lot of the original site, but I've refactored that quite a bit and had to rewrite a bit of the original just to be better code, too.

So now I give you a flat HTML version, an HTML version that uses JavaScript to pull pages from the server to act like a SPA, the rebuilt PHP version, and even a version written in C# .Net using Razor pages.

I've built a MySQL database with the HTML content in it, I'm working on a PHP API to access it, and a C# .Net app to request the data from the PHP API and display it. I haven't finished that yet, but I'm posting what I have due to potential employers wanting to see my profile, and I want to give them a better experience than the old, out of date, and not very well written PHP version. And I wanted to post the code for them to see, too.

In this case, posting the code is critical, since I could just be pretending that these are different versions of the same site. I do use a different background color for each site to help distinguish them, but that could just be a CSS change while reusing the same site in different ways. Sure, the background color change is a CSS change, but these really are completely different sites, and looking at the dev console can show some of it, but not all of it. Many of the changes are where the pages are being rendered, which is server side. This means that the plain HTML site will look nearly identical to the PHP and C# .Net versions in the browser.

Even with the C# .Net version I'm currently working on, it's not the final piece. I'm also going to add a PHP version that uses the PHP API. I'm also planning on copying the MySQL DB over to other DB types, like MS SQL Server, Oracle, and maybe a few others, too, then building a C# .Net API to handle those queries. The current DB only has 2 tables, but there is references between them. I'm not sure how NoSQL DB's will work with that, since it's been a few years since I used ElasticSearch.

I'm also going to write ReactJS, TypeScript, and other sites, as well. I'm doing this as broad spectrum as I can. I've used Java for many projects, but I've never written an API in Java. That's on this list. So is learning Node.js, Angular, Vue, Bootstrap, Svelt, and I'm not sure what else.

One other thing to note. I have two different hosting solutions. One is a GoDaddy Linux hosting with cPanel and the other is a free AWS account. I'm putting the C# .Net projects and most of the databases on the AWS account and the MySQL, HTML versions, PHP, and other projects on the Linux hosting. I'm also looking to create other c# .Net projects in various version of .Net to post on Azure and possibly Google Cloud. My current C# project is .Net Core 3.1. I'm using Visual Studio 2019 Community Edition, so I think that's as high as I can go. Once I take the time to install VS 2022, I'll be able to work on .Net 5 and 6.

Thank you for taking the time to read this. I know I got into the weeds on some of this, but there's a lot to cover and I wanted to explain things thoroughly, since this project is big and nowhere near complete. 
