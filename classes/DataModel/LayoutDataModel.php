<?php

namespace Classes\DataModel;

class LayoutDataModel
{
    private string $_pageName = "";
    private array $_body = [];
    private  array$_includeCssTags = [];
    private  array $_includeJs =[];
    private  array $_includeJsText =[];

    public function GetIncludeJs(): array
    {
        return $this->_includeJs;
    }

    public function SetIncludeJs(array $includeJs): void
    {
        $this->_includeJs = $includeJs;
    }

    public function GetIncludeJsText(): array
    {
        return $this->_includeJsText;
    }

    public function SetIncludeJsText(array $includeJsText): void
    {
        $this->_includeJsText = $includeJsText;
    }
    public function GetPageName(): string
    {
        return $this->_pageName;
    }

    public function SetPageName(string $pageName): void
    {
        $this->_pageName = $pageName;
    }

    public function GetBody(): array
    {
        return $this->_body;
    }

    public function AddBodySegment(string $bodySegment): void
    {
        $this->_body[] = $bodySegment;
    }

    public function GetIncludeCssTags(): array
    {
        return $this->_includeCssTags;
    }

    public function IncludeCss(string $cssName): void
    {
        $this->_includeCssTags [] = "<link rel='stylesheet' href='/css/$cssName'>";
    }

    public function IncludeJsLink(string $link):void
    {
        $this->_includeJs[] = <<<JS_LINK
            <script src="/js/$link"></script>
        JS_LINK;
    }

    public function IncludeCssLink(string $link):void
    {
        $this->_includeJs[] = $link;
    }


    public function IncludeJsText(string $code): void
    {
        $this->_includeJs[] = <<<JS_LINK
            <script type="module">$code</script>
        JS_LINK;
    }

}