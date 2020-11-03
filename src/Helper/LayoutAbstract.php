<?php
namespace Lgpd\Helper;

abstract class LayoutAbstract
{
    protected $bgColor;
    protected $color;
    protected $fontFamily;

    protected $styles = [
        '#vwi_lgpd' => 'display: none; background: #fefefe; border-top: 1px solid silver; padding: 10px; margin: 0; position: fixed; z-index: 99999; bottom:0; width: 100%; color: #666',
        '.vwi_lgpd-container' => 'max-width: 800px; margin: 0 auto; padding:0',
        '.vwi_lgpd-icon' => 'float: left; margin-right: 10px',
        '.vwi_lgpd-btn' => 'background: silver; border-radius: 5px; padding: 5px 10px; font: normal 12px/16px arial, tahoma, times, serif; float: right; margin-left: 10px',
        '.vwi_lgpd-btn:hover' => 'background: #ccc; color: #333',
        '.vwi_lgpd-text' => 'padding: 5px; margin:0; font: normal 12px/15px arial, tahoma, times, serif; text-align: justify'
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