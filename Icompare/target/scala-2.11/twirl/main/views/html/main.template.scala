
package views.html

import play.twirl.api._
import play.twirl.api.TemplateMagic._

import play.api.templates.PlayMagic._
import models._
import controllers._
import play.api.i18n._
import play.api.mvc._
import play.api.data._
import views.html._

/**/
object main extends BaseScalaTemplate[play.twirl.api.HtmlFormat.Appendable,Format[play.twirl.api.HtmlFormat.Appendable]](play.twirl.api.HtmlFormat) with play.twirl.api.Template2[String,Html,play.twirl.api.HtmlFormat.Appendable] {

  /**/
  def apply/*1.2*/(title: String)(content: Html):play.twirl.api.HtmlFormat.Appendable = {
      _display_ {

Seq[Any](format.raw/*1.32*/("""

"""),format.raw/*3.1*/("""<!DOCTYPE html>

<html>
    <head>
        <title>"""),_display_(/*7.17*/title),format.raw/*7.22*/("""</title>
        <link rel='stylesheet' type='text/css' href='"""),_display_(/*8.55*/routes/*8.61*/.Assets.at("stylesheets/main.css")),format.raw/*8.95*/("""'/>
        <link rel='stylesheet' type='text/css' href='"""),_display_(/*9.55*/routes/*9.61*/.Assets.at("stylesheets/bootstrap.min.css")),format.raw/*9.104*/("""'/>
        <script src='http://code.jquery.com/jquery.js'></script>
        <script src='"""),_display_(/*11.23*/routes/*11.29*/.Assets.at("javascripts/bootstrap.min.js")),format.raw/*11.71*/("""'></script>
        <script src='"""),_display_(/*12.23*/routes/*12.29*/.Assets.at("javascripts/selector1.js")),format.raw/*12.67*/("""'></script>
    </head>
    <body>
    <div class='container'>
        <div class = 'banner'>
            <img class='banner_img' src='"""),_display_(/*17.43*/routes/*17.49*/.Assets.at("images/banner_blue_shadow.png")),format.raw/*17.92*/("""'/>
        </div>
        <div class= 'sidebar'>
            <div class='sidebarlinks'>
                <div class='menu_button'>
                    <a href="#">Home</a>
                </div>
                <div class='menu_button'>
                    <a href="#">Profiel</a>
                </div>
                <div class='menu_button'>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
        <div class='content'>
            <div class="accordion">
        		<div class="accordion-section">
        			<a class="accordion-section-title" href="#accordion-1">Klik hier</a>
        			<div id="accordion-1" class="accordion-section-content">
        				<p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. 
        				Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, 
        				rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue 
        				ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. 
        				Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</p>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
    </body>
</html>"""))}
  }

  def render(title:String,content:Html): play.twirl.api.HtmlFormat.Appendable = apply(title)(content)

  def f:((String) => (Html) => play.twirl.api.HtmlFormat.Appendable) = (title) => (content) => apply(title)(content)

  def ref: this.type = this

}
              /*
                  -- GENERATED --
                  DATE: Wed Dec 10 16:11:51 CET 2014
                  SOURCE: C:/Users/Randa/Desktop/MARS-Computer-Builder/Icompare/app/views/main.scala.html
                  HASH: 88a60e2e644fc23bfb69cabb92f8a6d10c9b05c5
                  MATRIX: 509->1|627->31|657->35|738->90|763->95|853->159|867->165|921->199|1006->258|1020->264|1084->307|1204->400|1219->406|1282->448|1344->483|1359->489|1418->527|1586->668|1601->674|1665->717
                  LINES: 19->1|22->1|24->3|28->7|28->7|29->8|29->8|29->8|30->9|30->9|30->9|32->11|32->11|32->11|33->12|33->12|33->12|38->17|38->17|38->17
                  -- GENERATED --
              */
          