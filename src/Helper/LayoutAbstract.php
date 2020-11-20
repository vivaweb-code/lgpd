<?php
namespace Lgpd\Helper;

abstract class LayoutAbstract
{
    protected $bgColor;
    protected $color;
    protected $fontFamily;

    protected $styles = [
        '#vwi_lgpd' => 'display: none; background: #fefefe; border-top: 1px solid silver; margin: 0; padding:0; position: fixed; z-index: 99999; bottom:0; left: 0; width: 100%; color: #666',
        '.vwi_lgpd-container' => 'display:flex; max-width:800px; margin: 0 auto; padding: 15px 25px 15px 25px; vertical-align:middle',
        '.vwi_lgpd-icon' => '',
        '.vwi_lgpd-btn' => 'background: silver; border: 1px solid #ccc; margin-left: 15px; height: 30px; border-radius: 5px; padding: 5px 10px; font: normal 12px/16px arial, tahoma, times, serif; float: right;',
        '.vwi_lgpd-btn:hover' => 'background: #ccc; color: #333',
        '.vwi_lgpd-text' => 'margin:0; font: normal 12px/15px arial, Tahoma, times, serif; text-align: justify'
    ];

    public function __construct(array $styles = [])
    {
        if ($styles) {
            $this->styles = $styles;
        }
    }

    public function getStyleHTML()
    {
        $html = '<style>';
        foreach ($this->styles as $selector => $style) {
            $html .= $selector . '{' . $style . '}' . "\n";
        }
        $html .= '</style>';

        return $html;
    }
}