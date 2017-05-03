var qaIndex=0;
var template = {
	init : function(e){
		var play=template.play_audio(e);
		play.init();
	},
	resize_image_height : function(){
		$(".images").each(function(){
			if($(this).attr("data-original") == $(this).attr("src")){
				$(this).css("height","auto");
			}else{
				var h = parseInt($(this).attr("data-h"));
				var w = parseInt($(this).attr("data-w"));
				if(!h || !w){
					$(this).css("height","auto");
				}else{
					var height = (h>135)?135:h;
					var width = height * (w/h);

					//计算宽度是否超出最大值
					// var maxW =$(this).parents(".msg-body").width() * 0.6;
					var maxW = $(".content-wrapper").width() * 0.6;
					if (width > maxW) {
					    width = maxW;
					    height = width * (h / w);
					}

					$(this).height(height).width(width);
				}
			}
		});
	},
	get_audio_width : function(content){
		var t = parseInt(content.audio.times/1000);
        return t / 60 * 40 + 20 + "%";
	},
	get_audio_second: function (content) {
		var result = "";
		var t = parseInt(content.audio.times/1000);
        if (t <= 60) result = t + '"';
        else {
            var n = Math.floor(t / 60),
            r = t - n * 60;
            result = n + "'" + r + '"'
        }
	    return result;
	},
	get_question :function(){
		qaIndex++;
		return ("Q&A."+qaIndex);
	},
	play_audio: function(e){
		var t = [{
		        element: document,
		        event: "click",
		        selector: ".msg-label-voice[data-src]",
		        handler: function(e) {
		            n.triggerClickPlay(this)
		        }
		    },
		    {
		        element: document,
		        event: "click",
		        selector: '.msg-label[data-label="notRead"]',
		        handler: function(e) {
		            $(".unvip").length > 0 && (window.scrollTo(0, $(".unvip").offset().top - window.innerHeight / 2), $(".unvip .button").removeClass("prompt"), setTimeout(function() {
		                $(".unvip .button").addClass("prompt")
		            },
		            10))
		        }
		    }],
		    n = {
		        queryData: {},
		        existsAudios: [],
		        maxAudiosLength: 3,
		        init: function() {
		        	$(".msg-label-voice[data-src]").on("click",function(){
						n.triggerClickPlay(this);
					});
		            // $.bindEvents(t)
		        },
		        addAudioEle: function(e) {
		        	//容错处理：dom中音频文件都没有的情况下，existsAudios中的数据自动清空
		        	if ($(".msg-label-voice audio").length==0){
		        		while(n.existsAudios.length>0){
			        		var a = n.existsAudios.shift();
							a.off().remove();
		        		};
		        	}

		            $_this = e;
		            if ($("audio", $_this).length == 0) {
		                if (n.existsAudios.length >= n.maxAudiosLength) {
		                    var t = n.existsAudios.shift();
		                    
		                    t.off(),
		                    t.remove(),
		                    t[0].src = $_this.attr("data-src"),
		                    $_this.append(t[0])
		                } else $_this.append('<audio src="' + $_this.attr("data-src") + '"></audio>');
		                n.bindEvent($("audio", $_this)),
		                n.existsAudios.push($("audio", $_this))
		            }
		        },
		        checkCurrentElemVisible: function(e) {
		            if ($(e).length == 0) return ! 1;
		            var t = $(e).offset().top,
		            n = window.scrollY,
		            r = window.innerHeight; (t < n || t >= n + r) && $('html,body').animate({ scrollTop: t - r / 2 }, 250); //&& window.scrollTo(0, t - r / 2)
		        },
		        triggerClickPlay: function(e) {
		            var t = $(e),
		            r = $(".playing"),
		            p = $(".played");
		            if (t.hasClass("playing")) {
		                $("audio", t)[0].pause(),
		                 t.removeClass("playing").addClass("played");
		                return
		            }

		            if (t.hasClass("played")) {
		                t.removeClass("played");
		            } else {
		                p.length > 0 && (p.removeClass("played"), $("audio", p)[0].currentTime = 0);
		            }

                    //¼ÇÂ¼ÒÑ²¥·ÅµÄÒôÆµindex
		            if (t.hasClass("no-play")) {
		                var audios = $(".msg-label-voice[data-src]", t.closest(".apage_content")),
                        i = audios.index(t);

		                var workid = $.getQuery("workid") || "";
		                var readLog = JSON.parse($.getStorage(workid));
		                if (readLog.indexs == undefined) {
		                    readLog.indexs = []
		                }
		                readLog.indexs.push(i);
		                $.setStorage(workid, JSON.stringify(readLog));
		            }

					if (r.length > 0 && n.maxAudiosLength==1) {
						$("audio", r).siblings(".msg-bar-played").width('0%')
					}

		            r.length > 0 && (r.removeClass("playing"), $("audio", r)[0].pause(), $("audio", r)[0].currentTime = 0),
		            $("audio", t).length == 0 && n.addAudioEle(t),
		            $("audio", t)[0].play(),
		            t.removeClass("no-play").addClass("playing"),
		            n.checkCurrentElemVisible(e)
		        },
		        bindEvent: function(e) {
		            var t = this;
		            e = e || $(".msg-label-voice audio"),
		            e.on("ended",
		            function(e) {
		                var n = $(e.target).closest(".msg-label-voice"),
		                r = $(".msg-label-voice[data-src]", n.closest(".msg-list")),
		                i = r.index(n);
		                n.removeClass("playing");
		                if (i < r.length - 1) {
		                    var s = r.eq(i + 1);
		                    s.hasClass("no-play") && t.triggerClickPlay(s)
		                }
		                $(e.target).siblings(".msg-bar-played").width('0%');
		            }),
		            e.on("pause",
		            function(e) {
		                $(e.target).closest(".msg-label-voice").removeClass("playing")
		            }),
		            e.on("error",
		            function(e) {
		            	// $.tip("异常："+e.message);
		                $(e.target).closest(".msg-label-voice").trigger("click");
		            }),
		            e.on("play",
		            function(e) {
		                $(e.target).closest(".msg-label-voice").removeClass("waiting");
		                var n = $(e.target).closest(".msg-label-voice"),
		                r = $(".msg-label-voice[data-src]", n.closest(".msg-list")),
		                i = r.index(n);
		                // if (i < r.length - 1 &&　n.maxAudiosLengths>1) {
		                if (i < r.length - 1) {
		                    var s = r.eq(i + 1);
		                    s.hasClass("no-play") && t.addAudioEle(s)
		                }
		            }),
		            e.on("timeupdate",
		            function (e) {
		                var theAudio = $(e.target)[0];
		                $(e.target).siblings(".msg-bar-played").width((theAudio.currentTime / theAudio.duration) * 100 + '%');

						if (base.show_next && $(this).parents(".msg-item").attr("show-next") != "1") {
		                    var percent = this.currentTime / this.duration;
		                    if (percent > 0.5) {
		                        $(this).parents(".msg-item").attr("show-next", "1")
		                        base.show_next($(this).parents(".msg-item"));
		                    }
		                }

		            })
		        }
		    };
		return n
	}
};

// function init(e){
// 	var play=template.play_audio(e);
// 	play.init();
// }