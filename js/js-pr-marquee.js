$(document).ready(function(){
    repeatMarq();
});

function repeatMarq(obj){
    obj = obj || {};
    obj.el = obj.el || '.pr-marquee';
    let style = `
        <style>
            .pr-marquee-wrapper{display: flex; background: linear-gradient(0deg, #84d0e9, #add8e6); align-items: center; gap: 10px;}
            .pr-marquee-wrapper .news-title{
                background: navy;
                color: #fff;
                padding: 10px 0;
                font-size: 20px;
                width: 200px;
                text-align: center;
                flex: none;
            }
            .pr-marquee-wrapper ul.pr-marquee { flex: auto; display: flex; margin: 0;	padding: 0; list-style: none; overflow: hidden;}
            .pr-marquee-wrapper ul.pr-marquee li { padding-left: 30px; white-space: nowrap;}
            .pr-marquee-wrapper ul.pr-marquee li:before {
                content: '\\2666';
                font-weight: 700;
                font-size: 18px;
                display: inline-block;
                margin-right: 10px;
            }
            .pr-marquee-wrapper .btns { padding-right: 5px; display: flex; gap: 5px;}
            .pr-marquee-wrapper .btns .btn{padding: 7px 16px; border: 1px solid #fff; background-color: #fff8; display:block; text-decoration: none; cursor:pointer; white-space: nowrap;}
		
            .pr-ticker-wrapper{}
            .pr-ticker-wrapper .news-title{
                background: navy;
                color: #fff;
                padding: 10px 0;
                font-size: 20px;
                width: 200px;
                text-align: center;
                flex: none;
            }
            .pr-ticker-wrapper ul.pr-ticker {display: block; margin: 0; padding: 0; list-style: none; overflow: hidden; border: 1px solid #ddd}
            .pr-ticker-wrapper ul.pr-ticker li {display: block}
            .pr-ticker-wrapper .btns { padding-right: 5px; display: flex; gap: 5px;}
            .pr-ticker-wrapper .btns .btn{padding: 7px 16px; border: 1px solid #fff; background-color: #fff8; display:block; text-decoration: none; cursor:pointer; white-space: nowrap;}
		</style>
        `;
        // $('head').append(style);
        
    
    $(obj.el).each(function(){
        let repeatSpace = $(this).data('space') || false;
        let newsTitle = $(this).data('title') || "[data-title]";
        let animSpeed = $(this).data('speed') || 40;
        let buttons = $(this).data('btns') || '';
        let tickerHeight = $(this).data('height') || 200;
        let titleBG = $(this).data('title-bg') || '';
        let bg = $(this).data('bg') || '';
        // let textColor = $(this).data('color') || '';
        let init = 1;
        let button = buttons.split(',');
        let btns = '<div class="btns">';
        for(let i=0;i<button.length;i++){
            let btn = button[i].split('|');
            btns += '<a href="'+ btn[1] +'" class="'+ btn[2] +'" target="'+ (btn[3]||'') +'">'+ btn[0] +'</a>';
        }
        btns += '</div>';

        let paused = false;
        $(this).hover(function(){
            paused = true;
        }, function(){
            paused = false;
        });
        let dis = $(this);
        // dis.find('li')
        if(dis.hasClass('pr-ticker')){
            $(this).after('<div class="pr-ticker-wrapper"></div>')
                .appendTo($(this).next())
                .before('<div class="pr-ticker-title">'+newsTitle+'</div>')
                .after(btns);
            dis.height(tickerHeight);
            let marq = setInterval(function () {
                if(!paused){
                    let first_li = dis.children('li:first-child');
                    first_li.slideUp(400, function(){
                        $(this).appendTo(dis).slideDown(100);
                    });
                }
            }, animSpeed*100);
        }else{
            $(this).after('<div class="pr-marquee-wrapper" style="background:'+bg+'"></div>')
                .appendTo($(this).next())
                .before('<div class="news-title" style="background:'+titleBG+'">'+newsTitle+'</div>')
                .after(btns);
            let marq = setInterval(function () {
                if(!paused){
                    // console.log(obj);
                    let first_li = dis.children('li:first-child');
                    let liw = first_li.width() + parseInt(first_li.css('padding-left')) + parseInt(first_li.css('padding-right'));
                    let ml = parseInt( first_li.css('margin-left') );
                    first_li.css('margin-left', ml-1);
                    if(Math.round(liw) == ml*(-1)){
                        if(repeatSpace && init == 1){
                            first_li.addClass('init-li');
                            init++;
                        }
                        first_li.css('margin-left',0).appendTo(dis);
                        dis.children('li.init-li').css('margin-left', dis.width());
                    }
                }
            }, animSpeed);
        }
    });
}