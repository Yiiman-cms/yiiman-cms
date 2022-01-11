<?php


namespace common\widgets;


use YiiMan\YiiBasics\lib\View;
use yii\bootstrap\Widget;
use yii\helpers\Html;

class AdminMenuWidgets extends Widget
{
    public $items = [];


    public $options = [];

    public function run()
    {

        $js = <<<JS

function validURL(url) {
   
    regEx = /^https?:\/\/(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)$/gm;
    if (regEx.test(url)){
     
        return true;
    }
    regEx = /\/(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)$/gm;
    if (regEx.test(url)){
       
        return true;
    }
    
    regEx = /\/(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}$/gm;
    if (regEx.test(url)){
        
        return true;
    }
     regEx = /#(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}$/gm;
    if (regEx.test(url)){
        
        return false;
    }
    
     regEx = /(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}$/gm;
    if (regEx.test(url)){
        
        return true;
    }
     regEx = /(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\/$/gm;
    if (regEx.test(url)){
       
        return true;
    }
    
   
    return false;
    
        
}

    $('a').click(function(e){
        var elm=$(this);
        e.preventDefault();
        var baseLocation=window.location.href;
        if (validURL($(this).attr('href')))
        {
              window.history.replaceState(null, '', $(this).attr('href'));
              
              window.location.replace($(this).attr('href'));
            e.preventDefault();
            $('.loading').fadeIn('slow');
            $.ajax({
                        url:$(this).attr('href'),
                        method:'get',
                        success(res){
                            
                            if (res.indexOf("<html") >= 0){
                                document.open();
                                document.write(res);
                                document.close();
                                    
                            }else{
                                 window.history.replaceState('statedata', 'title', baseLocation);
                                 sweetAlert({
                                        title:'',
                                        text: res,
                                        icon:"warning"
                                    });
                                 $('.loading').fadeOut('slow');
                               
                                var f=elm.attr('done');
                               
                                if (f){
                                   
                                    eval(f+'(elm)');
                                }
                                
                            }
                            
                            
                            
                            // document.title = title;
                             
                        },
                        error:function(e){
                            $('.loading').fadeOut();
                            
                            sweetAlert({
                            title:e.status,
                            text:e.statusText,
                            icon:"warning"
                            });
                             window.history.replaceState('statedata', 'title', baseLocation);
                        }
                });
        }
       
    });
JS;
        $this->view->registerJs($js, View::POS_END);

        $html = '<ul class="nav sidebar-nav">';
        foreach ($this->items as $item) {
            $html .= self::buildTag($item);
        }
        $html .= '</ul>';
        return $html;
    }

    private static function buildTag($item)
    {
        $options =
            [
                'item_template' => '
<li class="nav-item {urlClass}">
    <a class="nav-link lnk" href="{href}">
          <i class="material-icons">{icon}</i>
          <p> {label} </p>
    </a>

</li>
',
                'sub_item_template' => '
<li class="nav-item ">
    <a class="nav-link collapsed" data-toggle="collapse" href="#{uniqId}" aria-expanded="false">
          <i class="material-icons">{icon}</i>
          <p> {label}
            <b class="caret"></b>
          </p>
    </a>
    <div class="collapse" id="{uniqId}" style="">
          <ul class="nav">
                {items}
          </ul>
    </div>
</li>
                '
            ];

        $icon = !empty($item['icon']) ? $item['icon'] : 'dashboard';

        // < calculate Items >
        {
            if (!empty($item['items'])) {
                $itemsHtml = '';
                foreach ($item['items'] as $i) {
                    $itemsHtml .= self::buildTag($i);
                }
                return str_replace(
                    ['{uniqId}', '{icon}', '{label}', '{items}'],
                    [uniqid(), $icon, $item['label'], $itemsHtml],
                    $options['sub_item_template']
                );
            } else {
                $urlClass = self::activeMenu($item['url']);
                return str_replace(
                    ['{urlClass}', '{href}', '{icon}', '{label}', '{items}'],
                    [$urlClass, \Yii::$app->urlManager->createUrl([$item['url']]), $icon, $item['label'], ''],
                    $options['item_template']
                );
            }
        }
        // </ calculate Items >

    }

    public static function activeMenu($url)
    {

        $backendUrl = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
        $currentPage = str_replace($backendUrl, '', $_SERVER['REQUEST_URI']);
        if ($currentPage == $url) {
            return 'active';
        } else {
            return '';
        }
    }
}
