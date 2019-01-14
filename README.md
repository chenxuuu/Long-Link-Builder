# Long-Link-Builder

# 长链接生成器

---

可以把短链接变成特别特别特别长的链接

演示网址：http://biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com/

（光域名就挺长）



例如：

输入：http://baidu.com/

输出：
https://biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com/mq48ugj500111531gjilvn41elfnwdp4so446969l5239liam4qthvohg9us734peng3bhetpqetnomwwdsvla4uk0u9mdfsp0b4QUFIVTl6T3ZVMXB3RXpLOTAxU0RiS3BneXkq9j1e42a0ib8oigtcdek93wic00wts34il4v0p6a490wt7umtqhqemblelt54brapgqbm4jeoaqdjkdodwbbm434luwmrv2stti1bnk6vcmufe8kvbtupbdtfub8rcc0r2gtrmjrjgiv8cq02aajoug3m0ulkfd0ascfqcquj5itqjwbiw441rd0efm6vatrhidq7ffpwatev6wonpe30i0mq1raq9si1efj9e8f6s1j4nmollmmlc53wr2gkt1oot9stt7goboqkltpmlo4kqfrtgvnwr4384w12fv5bj8bvllh47ihi1boekjvto88d420bn05pvn1a9qv5cujltgvq1or19ou52ho4i77g8rmeumnsih4iiu2f39fo0djdcvn9a0gq9u45f9os6uilm0fa98i43l6o806jtpqw62nlr6p1beward51t4ojjmku4ok56l344v0utdnfjff02p5gsh07k15umgws0mw6bnep4ig30cqqrbd0p0r8n600rcpvbf077ncfhfo6rbg8j4j4ee1r2p7t9o4je9qmohlaqq4u8mwvluhewlfncweudcqnvc26woj73pnta594ti35b14mc44h87h1goqo4lnlvq61qfs8luoei8pwh7rp3q5nplg0551lfujbue4r2876sa2ktgqpoft5cnltiu405lwhom2cu55fjhcr0on2wvb98i1tra6lv5o3q758lh1c45b1819mvluqrp817rbqj32lma9meruhrtp28mbguhujnunuqcdec6e56bogav1kpg1hago8cd38tue80ecvsl006hw1d4le8hcqcgb94qca6t3kokihm47hauw26wvg8p8ghmdg2fw0m80j3u5njojg54iswh6518q5fihp2w8etw1hudd9ibt7hd

---

# 食用方法

clone整个项目，把文件里的`biubiu....com`网址全部换成你自己的网址

扔到服务器上，无需数据库

设置伪静态，nginx如下(apache自己照着写吧233)：

```nginx
location / {
    if (!-e $request_filename) {
        rewrite ^(.*)/mirror(.*)$ $1/mirror.php?dat=$2 last;
        #mirror

        rewrite ^/(.*) /lj.php?dat=$1 last;
        #new
    }
}
```

---

欢迎pr/star
