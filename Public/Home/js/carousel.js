;(function($){
    var Carousel = function(poster){
        //保存单个旋转木马对象
        var self = this;
        self.poster = poster;
        self.posterItemMain = poster.find('ul.poster-list');
        self.nextBtn = poster.siblings('.next');
        self.prevBtn = poster.siblings('.prey');
        self.posterItems = poster.find('li.poster-item');
        if(self.posterItems.length%2===0){
            self.posterItemMain.append(self.posterItems.eq(0).clone());
            self.posterItems = self.posterItemMain.children();
        }
        self.posterFirstItem = self.posterItems.first();
        self.posterLastItem = self.posterItems.last();
        self.rotateFlag = true;
        //默认配置参数
        self.setting = {
            "width":500, //幻灯片的宽度
            "height":270, //幻灯片的高度
            "posterWidth":640, //幻灯片第一帧的宽度
            "posterHeight":270, //幻灯片第一帧的高度
            "scale":0.9,
            "speed":500,
            "autoPlay":true,
            "delay":2000,
            "verticalAlign":"middle"
        };
        $.extend(self.setting,self.getSetting());
        //设置配置参数值
        self.setSettingValue();
        self.setPosterPos();
        //左旋转按钮
        self.nextBtn.click(function(){
            if(self.rotateFlag){
                self.rotateFlag = false;
                self.carouselRotate("left");
            }
        });
        //右旋转按钮
        self.prevBtn.click(function(){
            if(self.rotateFlag){
                self.rotateFlag = false;
                self.carouselRotate("right");
            }
        });
        //是否开启自动播放
        if(self.setting.autoPlay){
            self.autoPlay();
            self.poster.hover(function() {
                window.clearInterval(self.timer);
            }, function() {
                self.autoPlay();
            });
        }
    };
    Carousel.prototype = {
        //自动播放
        autoPlay:function(){
            var self = this;
            this.timer = window.setInterval(function(){
                self.nextBtn.click();
            },this.setting.delay);
        },
        //旋转
        carouselRotate:function(dir){
            var _this_ = this;
            var zIndexArr = [];
            _this_.posterItems.each(function(){
                var self = $(this);
                var go;
                if(dir === "left"){
                    go = self.prev().get(0)?self.prev():_this_.posterLastItem;
                }else if(dir === "right"){
                    go = self.next().get(0)?self.next():_this_.posterFirstItem;
                }
                var width = go.css("width"),
                    height = go.css("height"),
                    zIndex = go.css("z-index"),
                    opacity = go.css("opacity"),
                    left = go.css("left"),
                    top = go.css("top");

                zIndexArr.push(zIndex);
                self.animate({
                    width: width,
                    height: height,
                    opacity:opacity,
                    left:left,
                    top:top
                },_this_.setting.speed,function(){
                    _this_.rotateFlag = true;
                });
            });
            _this_.posterItems.each(function(index, el) {
                $(this).css("zIndex",zIndexArr[index]);
            });
        },
        //设置剩余的帧的位置关系
        setPosterPos:function(){
            var self = this;
            var sliceItems = self.posterItems.slice(1),
                sliceSize = sliceItems.length/2,
                rightSlice = sliceItems.slice(0,sliceSize),
                leftSlice = sliceItems.slice(sliceSize),
                level = Math.floor(self.posterItems.length/2);
            //设置右边帧的位置关系和高度宽度top
            var rw = self.setting.posterWidth,
                rh = self.setting.posterHeight,
                gap = ((self.setting.width - self.setting.posterWidth)/2)/level;
            var firstLeft = (this.setting.width - this.setting.posterWidth)/2;
            var  fixOffsetLeft = firstLeft + rw ;

            rightSlice.each(function(index, el) {
                level --;
                rw = rw * self.setting.scale;
                rh = rh * self.setting.scale;
                var j = index;
                $(this).css({
                    "z-index": level,
                    "width": rw,
                    "height": rh,
                    "opacity":1/(++j),
                    "left":fixOffsetLeft + (++index) * gap - rw,
                    "top":self.setVerticalAlign(rh)
                });
            });
            //设置左边的位置关系
            var lw = rightSlice.last().width(),
                lh = rightSlice.last().height(),
                oloop = Math.floor(this.posterItems.length/2);
            leftSlice.each(function(index, el) {
                $(this).css({
                    "z-index": index,
                    "width": lw,
                    "height": lh,
                    "opacity": 1/oloop,
                    "left":index * gap,
                    "top":self.setVerticalAlign(lh)
                });
                lw = lw / self.setting.scale;
                lh = lh / self.setting.scale;
                oloop--;
            });
        },
        //设置垂直排列对齐
        setVerticalAlign:function(height){
            var verticalType = this.setting.verticalAlign,
                top = 0,
                gapHeight = this.setting.height - height,
                topMap = {"middle":gapHeight/2,"top":0,"bottom":gapHeight};
            top = topMap[height]||gapHeight/2;
            return top;
        },
        //设置配置参数值去控制基本的宽度高度
        setSettingValue:function(){
            this.poster.css({
                "width": this.setting.width,
                "height": this.setting.height
            });
            this.posterItemMain.css({
                "width": this.setting.width,
                "height": this.setting.height
            });
            //计算上下切换按钮的宽度
            var w = (this.setting.width - this.setting.posterWidth)/2;
            this.nextBtn.css({
                "width": w,
                "height": this.setting.height,
                "z-index":Math.ceil(this.posterItems.length/2)
            });
            this.prevBtn.css({
                "width": w,
                "height": this.setting.height,
                "z-index":Math.ceil(this.posterItems.length/2)
            });
            this.posterFirstItem.css({
                "width": this.setting.posterWidth,
                "height":this.setting.posterHeight,
                "left": w,
                "z-index":Math.floor(this.posterItems.length/2)
            });
        },
        //获取人工配置参数
        getSetting:function(){
            var setting = this.poster.attr("data-setting");
            if(setting && setting!==""){
                return $.parseJSON(setting);
            }else{
                return {};
            }
        }
    };
    Carousel.init = function(posters){
        var _this_ = this;//this指的是Carousel
        posters.each(function(index,el){
            new _this_($(this));
        });
    };
    window["Carousel"] = Carousel;
})(jQuery);