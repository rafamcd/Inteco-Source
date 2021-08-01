<?php $i = 1; $soma = 0; $saldo = 0; ?>
                  <?php if (count($dadosprestacao[0]) == 1): ?>
                  <?php 
                    $itemvalorad[1] = $dadosprestacao['valor_adiantamento'];
                    $itemvinculo[1] = $dadosprestacao['vinculo_outra_prestacao'];
                    $itemdata[1] = $dadosprestacao['data'];
                    $itemdesc[1] = $dadosprestacao['descricao'];
                    $itemvalor[1] = $dadosprestacao['valor'];
                    $itemempresa[1] = $dadosprestacao['empresa'];
                    $soma = $soma + $dadosprestacao['valor'];
                  ?>
                  <?php else: ?>
                  <?php $i = 1;  ?>
                  <?php foreach ($dadosprestacao as $dpitem): ?>
                       
                    <?php
                    $itemvalorad[$i] = $dpitem['valor_adiantamento'];
                    $itemvinculo[$i] = $dpitem['vinculo_outra_prestacao'];
                    $itemdata[$i] = $dpitem['data'];
                    $itemdesc[$i] = $dpitem['descricao'];
                    $itemvalor[$i] = $dpitem['valor'];
                    $itemempresa[$i] = $dpitem['empresa'];
                    $soma = $soma + $dpitem['valor'];
                    $i++;
                    ?>
                    
                  <?php endforeach; ?>
                  <?php endif; ?>
    <?php if (!empty($itemvalorad[1])) $saldo = $itemvalorad[1] - $soma;  ?>

<?php if (isset($itemvinculo[1]) && !empty($itemvinculo[1])): ?> 
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="PRESTAÇÃO%20DE%20CONTAS2_arquivos/filelist.xml">
<title>Relatório de Prestação de Contas - Inteco Tecnologia Informática LTDA</title>
</head>
    <body>
        <h4>Essa prestação de contas está vinculada na prestação da Viagem com ID <strong><?php echo $itemvinculo[1]; ?></strong>. <br/>Está é uma forma de deixar uma prestação de contas para vários municípios visitados em uma única viagem!<br/>Sendo assim, emita a prestação de contas da viagem escolhida como principal.</h4>
    </body>
</html>
<?php else: ?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="PRESTAÇÃO%20DE%20CONTAS2_arquivos/filelist.xml">
<title>Relatório de Prestação de Contas - Inteco Tecnologia Informática LTDA</title>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Rafael Dias</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor>Rafael Dias</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>28</o:TotalTime>
  <o:Created>2019-11-03T17:20:00Z</o:Created>
  <o:LastSaved>2019-11-03T17:20:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>181</o:Words>
  <o:Characters>982</o:Characters>
  <o:Lines>8</o:Lines>
  <o:Paragraphs>2</o:Paragraphs>
  <o:CharactersWithSpaces>1161</o:CharactersWithSpaces>
  <o:Version>14.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="PRESTAÇÃO%20DE%20CONTAS2_arquivos/themedata.thmx">
<link rel=colorSchemeMapping
href="PRESTAÇÃO%20DE%20CONTAS2_arquivos/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:HyphenationZone>21</w:HyphenationZone>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>PT-BR</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
  DefSemiHidden="true" DefQFormat="false" DefPriority="99"
  LatentStyleCount="267">
  <w:LsdException Locked="false" Priority="0" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" Priority="10" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" Priority="11" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" Priority="22" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" Priority="59" SemiHidden="false"
   UnhideWhenUsed="false" Name="Table Grid"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536859905 -1073732485 9 0 511 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:1.0cm 1.0cm 1.0cm 1.0cm;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Tabela normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
table.MsoTableGrid
	{mso-style-name:"Tabela com grade";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-priority:59;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=PT-BR style='tab-interval:35.4pt'>

<div class=WordSection1>

<p class=MsoNormal style='line-height:150%'><b style='mso-bidi-font-weight:
normal'><span style='font-size:18.0pt;line-height:150%;font-family:"Arial","sans-serif";
color:red'>PRESTAÇÃO DE CONTAS<o:p></o:p></span></b></p>

<p class=MsoNormal style='line-height:150%'><b style='mso-bidi-font-weight:
normal'><span style='font-size:14.0pt;line-height:150%;font-family:"Arial","sans-serif";
color:black;mso-themecolor:text1'>Data:</span></b><span style='font-size:14.0pt;
line-height:150%;font-family:"Arial","sans-serif";color:black;mso-themecolor:
text1'> <span class=SpellE><span class=GramE><?php echo date('d/m/Y', strtotime($dadosviagem['data'])); ?></span></span><br>
<b style='mso-bidi-font-weight:normal'>Cliente(s): </b><span class=SpellE>
    <?php if(isset($nomesvinculados) && !empty($nomesvinculados) && (' <br/> '.$dadosviagem['nome'] != $nomesvinculados)): ?>
    
    <?php echo utf8_encode($dadosviagem['nome']).utf8_encode($nomesvinculados); ?>
    <?php else: ?>
    <?php echo utf8_encode($dadosviagem['nome']); ?>
    <?php endif; ?>
</span><br>
<b style='mso-bidi-font-weight:normal'>Técnico: </b><span class=SpellE><?php echo utf8_encode($dadosviagem['nomefunc']); ?></span><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:150%;background:yellow'><span
style='font-size:14.0pt;line-height:150%;font-family:"Arial","sans-serif";
color:black;mso-themecolor:text1'>ADIANTAMENTO DINHEIRO<span class=GramE><span
style='mso-spacerun:yes'>   </span></span>=<span style='mso-spacerun:yes'>  
</span>R$<span style='mso-spacerun:yes'>  </span><span class=SpellE><b
        style='mso-bidi-font-weight:normal'>
        
    <?php if (!empty($itemvalorad[1])) echo number_format($itemvalorad[1],2,',','.'); ?>

        
    </b></span> <o:p></o:p></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  line-height:150%;font-family:"Arial","sans-serif"'>Descrição<o:p></o:p></span></b></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  mso-bidi-font-size:14.0pt;line-height:150%;font-family:"Arial","sans-serif"'>Valor<o:p></o:p></span></b></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  mso-bidi-font-size:14.0pt;line-height:150%;font-family:"Arial","sans-serif"'>Data<o:p></o:p></span></b></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  mso-bidi-font-size:14.0pt;line-height:150%;font-family:"Arial","sans-serif"'>Empresa<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[1])) echo utf8_encode($itemdesc[1]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[1])) echo 'R$ '. number_format($itemvalor[1],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[1])) echo date('d/m/Y', strtotime($itemdata[1])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[1])) echo utf8_encode($itemempresa[1]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[2])) echo utf8_encode($itemdesc[2]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[2])) echo 'R$ '. number_format($itemvalor[2],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[2])) echo date('d/m/Y', strtotime($itemdata[2])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[2])) echo utf8_encode($itemempresa[2]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[3])) echo utf8_encode($itemdesc[3]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[3])) echo 'R$ '. number_format($itemvalor[3],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[3])) echo date('d/m/Y', strtotime($itemdata[3])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[3])) echo utf8_encode($itemempresa[3]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[4])) echo utf8_encode($itemdesc[4]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[4])) echo 'R$ '. number_format($itemvalor[4],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[4])) echo date('d/m/Y', strtotime($itemdata[4])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[4])) echo utf8_encode($itemempresa[4]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[5])) echo utf8_encode($itemdesc[5]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[5])) echo 'R$ '. number_format($itemvalor[5],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[5])) echo date('d/m/Y', strtotime($itemdata[5])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[5])) echo utf8_encode($itemempresa[5]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[6])) echo utf8_encode($itemdesc[6]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[6])) echo 'R$ '. number_format($itemvalor[6],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[6])) echo date('d/m/Y', strtotime($itemdata[6])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[6])) echo utf8_encode($itemempresa[6]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[7])) echo utf8_encode($itemdesc[7]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[7])) echo 'R$ '. number_format($itemvalor[7],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[7])) echo date('d/m/Y', strtotime($itemdata[7])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[7])) echo utf8_encode($itemempresa[7]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[8])) echo utf8_encode($itemdesc[8]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[8])) echo 'R$ '. number_format($itemvalor[8],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[8])) echo date('d/m/Y', strtotime($itemdata[8])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[8])) echo utf8_encode($itemempresa[8]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[9])) echo utf8_encode($itemdesc[9]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[9])) echo 'R$ '. number_format($itemvalor[9],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[9])) echo date('d/m/Y', strtotime($itemdata[9])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[9])) echo utf8_encode($itemempresa[9]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[10])) echo utf8_encode($itemdesc[10]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[10])) echo 'R$ '. number_format($itemvalor[10],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[10])) echo date('d/m/Y', strtotime($itemdata[10])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[10])) echo utf8_encode($itemempresa[10]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[11])) echo utf8_encode($itemdesc[11]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[11])) echo 'R$ '. number_format($itemvalor[11],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[11])) echo date('d/m/Y', strtotime($itemdata[11])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[11])) echo utf8_encode($itemempresa[11]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[12])) echo utf8_encode($itemdesc[12]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[12])) echo 'R$ '. number_format($itemvalor[12],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[12])) echo date('d/m/Y', strtotime($itemdata[12])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[12])) echo utf8_encode($itemempresa[12]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[13])) echo utf8_encode($itemdesc[13]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[13])) echo 'R$ '. number_format($itemvalor[13],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[13])) echo date('d/m/Y', strtotime($itemdata[13])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[13])) echo utf8_encode($itemempresa[13]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[14])) echo utf8_encode($itemdesc[14]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[14])) echo 'R$ '. number_format($itemvalor[14],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[14])) echo date('d/m/Y', strtotime($itemdata[14])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[14])) echo utf8_encode($itemempresa[14]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[15])) echo utf8_encode($itemdesc[15]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[15])) echo 'R$ '. number_format($itemvalor[15],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[15])) echo date('d/m/Y', strtotime($itemdata[15])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[15])) echo utf8_encode($itemempresa[15]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[16])) echo utf8_encode($itemdesc[16]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[16])) echo 'R$ '. number_format($itemvalor[16],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[16])) echo date('d/m/Y', strtotime($itemdata[16])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[16])) echo utf8_encode($itemempresa[16]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[17])) echo utf8_encode($itemdesc[17]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[17])) echo 'R$ '. number_format($itemvalor[17],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[17])) echo date('d/m/Y', strtotime($itemdata[17])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[17])) echo utf8_encode($itemempresa[17]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[18])) echo utf8_encode($itemdesc[18]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[18])) echo 'R$ '. number_format($itemvalor[18],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[18])) echo date('d/m/Y', strtotime($itemdata[18])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[18])) echo utf8_encode($itemempresa[18]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[19])) echo utf8_encode($itemdesc[19]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[19])) echo 'R$ '. number_format($itemvalor[19],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[19])) echo date('d/m/Y', strtotime($itemdata[19])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[19])) echo utf8_encode($itemempresa[19]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;mso-yfti-lastrow:yes;height:18.5pt'>
  <td width=245 valign=bottom style='width:183.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><?php if (!empty($itemdesc[20])) echo utf8_encode($itemdesc[20]); ?></span></span><span
  style='font-size:10.0pt;line-height:150%;font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=bottom style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemvalor[20])) echo 'R$ '. number_format($itemvalor[20],2,',','.'); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=113 valign=bottom style='width:3.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemdata[20])) echo date('d/m/Y', strtotime($itemdata[20])); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 valign=bottom style='width:184.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span class=GramE><span style='font-size:10.0pt;mso-bidi-font-size:
  14.0pt;line-height:150%;font-family:"Arial","sans-serif"'><?php if (!empty($itemempresa[20])) echo utf8_encode($itemempresa[20]); ?></span></span><span
  style='font-size:10.0pt;mso-bidi-font-size:14.0pt;line-height:150%;
  font-family:"Arial","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='line-height:150%'><span style='font-size:14.0pt;
line-height:150%;font-family:"Arial","sans-serif"'><br>
<b style='mso-bidi-font-weight:normal'>VALOR TOTAL DESPESAS<span class=GramE><span
style='mso-spacerun:yes'>   </span></span>=<span style='mso-spacerun:yes'>  
</span>R$<span style='mso-spacerun:yes'>  </span><span class=SpellE><?php if (!empty($soma)) echo number_format($soma,2,',','.'); ?></span><o:p></o:p></b></span></p>

<p class=MsoNormal style='line-height:150%;background:yellow'><b
style='mso-bidi-font-weight:normal'><span style='font-size:14.0pt;line-height:
150%;font-family:"Arial","sans-serif"'>SALDO A RESTITUIR<span
style='mso-spacerun:yes'>   </span>=<span style='mso-spacerun:yes'>   </span>R$
<?php if (!empty($saldo) || ($saldo=='0')) echo number_format($saldo,2,',','.'); ?><o:p></o:p></span></b></p>

</div>

</body>

</html>

<?php endif; ?>



