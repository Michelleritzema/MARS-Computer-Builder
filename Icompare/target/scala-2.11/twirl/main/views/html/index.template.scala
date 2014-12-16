
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
object index extends BaseScalaTemplate[play.twirl.api.HtmlFormat.Appendable,Format[play.twirl.api.HtmlFormat.Appendable]](play.twirl.api.HtmlFormat) with play.twirl.api.Template1[String,play.twirl.api.HtmlFormat.Appendable] {

  /**/
  def apply/*1.2*/(message: String):play.twirl.api.HtmlFormat.Appendable = {
      _display_ {

Seq[Any](format.raw/*1.19*/("""

"""),_display_(/*3.2*/main(message)/*3.15*/ {_display_(Seq[Any](format.raw/*3.17*/(""" """)))}),format.raw/*3.19*/("""
"""))}
  }

  def render(message:String): play.twirl.api.HtmlFormat.Appendable = apply(message)

  def f:((String) => play.twirl.api.HtmlFormat.Appendable) = (message) => apply(message)

  def ref: this.type = this

}
              /*
                  -- GENERATED --
                  DATE: Wed Dec 10 16:11:51 CET 2014
                  SOURCE: C:/Users/Randa/Desktop/MARS-Computer-Builder/Icompare/app/views/index.scala.html
                  HASH: f0ec1d0a261f1f72490cdcc21f4047dfc44ed262
                  MATRIX: 505->1|610->18|640->23|661->36|700->38|732->40
                  LINES: 19->1|22->1|24->3|24->3|24->3|24->3
                  -- GENERATED --
              */
          