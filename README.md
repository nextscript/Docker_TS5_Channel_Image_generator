# Supported tags
**latest** [linux/amd64], **arm** [linux/arm]

# Docker_TS5-Channel-Image-Generator

![Demo2](https://raw.githubusercontent.com/nextscript/TS5-Channel-Image-Generator/master/demo_ch.png)

_______________________________________________________________________________

This Script ONLY work for the New Teamspeak Client.
_______________________________________________________________________________

[DEMO](https://ts5x.cf) 

# Start command 

**For linux/amd64**
<pre><code>docker run -d --restart=always --name ts5cig -p 80:80 -p 443:443 virose/teamspeak-channel_img_generator:latest</code></pre>

**For linux/arm**
<pre><code>docker run -d --restart=always --name ts5cig -p 80:80 -p 443:443 virose/teamspeak-channel_img_generator:arm</code></pre>
