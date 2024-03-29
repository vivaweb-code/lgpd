<?php
namespace Lgpd\Helper;

class Confirm extends LayoutAbstract
{

    protected $text = "Usamos cookies para fornecer os recursos e serviços oferecidos em nosso site para melhorar a experência do usuário. Ao continuar navegando neste site, você concorda com o uso destes cookies. Leia nossa Política de Privacidade para saber mais.";

    protected $template = <<<HTML
<div id="vwi_lgpd">
    <div class="vwi_lgpd-container">
        <p class="vwi_lgpd-text">
        :text
        </p>
        <button class="vwi_lgpd-btn" onclick="vwi_lgpd('click')">ACEITO</button>
    </div>
</div>

<script>
    function getCookie(cname){var name=cname+"=";var decodedCookie=decodeURIComponent(document.cookie);var ca=decodedCookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==' '){c=c.substring(1)}if(c.indexOf(name)==0){return c.substring(name.length,c.length)}}return""}
    function setCookie(cname,cvalue,exdays){var d=new Date();d.setTime(d.getTime()+(exdays*24*60*60*1000));var expires="expires="+d.toUTCString();document.cookie=cname+"="+cvalue+";"+expires+";path=/"}

    function vwi_lgpd(event) {
        obj = document.getElementById('vwi_lgpd');
        if (event == 'click') {
            setCookie('vwi-lgpd-consent', new Date());
            obj.style.display = "none";
        }
        if (event == 'load') {
            var consent = getCookie('vwi-lgpd-consent');
            if (! consent) {
                console.log('! consent');
                obj.style.display = "block";
            }
        }
    }
    vwi_lgpd('load');
</script>
HTML;

    /**
     * @var string HTML resultante da operação
     */
    protected $html;

    /**
     * Confirm constructor.
     * @param array $options
     *  - text: texto para o aviso
     * @param array $styles
     */
    public function __construct(array $options = [], array $styles = [])
    {
        parent::__construct($styles);

        foreach ($options as $key => $option) {
            switch ($key) {
                case 'text':
                    $this->text = (string) $option;
                    break;
            }
        }
    }

    /**
     * @return string HTML do texto e script
     */
    public function createHTML()
    {
        $this->html = $this->template;
        $this->html = str_replace(':text', $this->text, $this->html);
        return $this->html;
    }

    /**
     * @return string HTML com style, html e script
     */
    public function render()
    {
        $html = $this->getStyleHTML();
        $html .= $this->createHTML();
        return $html;
    }
}
