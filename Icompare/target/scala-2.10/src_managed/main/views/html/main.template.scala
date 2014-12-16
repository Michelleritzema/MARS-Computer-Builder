
package views.html

import play.templates._
import play.templates.TemplateMagic._

import play.api.templates._
import play.api.templates.PlayMagic._
import models._
import controllers._
import java.lang._
import java.util._
import scala.collection.JavaConversions._
import scala.collection.JavaConverters._
import play.api.i18n._
import play.core.j.PlayMagicForJava._
import play.mvc._
import play.data._
import play.api.data.Field
import play.mvc.Http.Context.Implicit._
import views.html._
/**/
object main extends BaseScalaTemplate[play.api.templates.HtmlFormat.Appendable,Format[play.api.templates.HtmlFormat.Appendable]](play.api.templates.HtmlFormat) with play.api.templates.Template2[String,Html,play.api.templates.HtmlFormat.Appendable] {

    /**/
    def apply/*1.2*/(title: String)(content: Html):play.api.templates.HtmlFormat.Appendable = {
        _display_ {

Seq[Any](format.raw/*1.32*/("""
<!DOCTYPE html>

<html>

<head>
<title>"""),_display_(Seq[Any](/*7.9*/title)),format.raw/*7.14*/("""</title>
<link rel = 'stylesheet' type = 'text/css' href = '"""),_display_(Seq[Any](/*8.53*/routes/*8.59*/.Assets.at("images/main.css"))),format.raw/*8.88*/("""' />
<div class = 'banner'>
  	    <img id = 'banner' src='"""),_display_(Seq[Any](/*10.33*/routes/*10.39*/.Assets.at("images/banner_blue.jpg"))),format.raw/*10.75*/("""' >
</div>  

    </head>
 
 <body>
<div class= 'sidebar'>	

  <div class='sidebarlinks'>
<a href="http://www.computerstore.nl/category/208983/moederborden.html">Moederborden</a><br>
<a href="">Processoren</a><br>
<a href="">Intern geheugen</a><br>
<a href="">Videokaarten</a><br>
<a href="">Behuizingen</a><br>
<a href="">Voedingen</a><br>
<a href="">Processorkoelers</a><br>
<a href="">Interne harde schijven</a><br>
<a href="">Solid State Drives</a><br>
<a href="">Geluidskaarten</a><br>
<a href="">PCI Express kaarten</a><br>
<a href="">Blu-ray/DVD Branders</a><br>
<a href="">Barebones</a><br>
  </div>
      
</div>

<div class= 'body'>
</div>  


    
</body> 
     """))}
    }
    
    def render(title:String,content:Html): play.api.templates.HtmlFormat.Appendable = apply(title)(content)
    
    def f:((String) => (Html) => play.api.templates.HtmlFormat.Appendable) = (title) => (content) => apply(title)(content)
    
    def ref: this.type = this

}
                /*
                    -- GENERATED --
                    DATE: Sun Nov 16 21:28:57 CET 2014
                    SOURCE: C:/Users/Randa/Icompare/app/views/main.scala.html
                    HASH: 9a2c9884c06d4357ee590f21009fa69f6a5054a9
                    MATRIX: 778->1|902->31|983->78|1009->83|1106->145|1120->151|1170->180|1268->242|1283->248|1341->284
                    LINES: 26->1|29->1|35->7|35->7|36->8|36->8|36->8|38->10|38->10|38->10
                    -- GENERATED --
                */
            