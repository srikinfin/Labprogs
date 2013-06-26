<?xml version = "1.0"?>
<!-- xslplane.xsl -->
<xsl:stylesheet version = "1.0"
xmlns:xsl = "http://www.w3.org/1999/XSL/Transform"
xmlns = "http://www.w3.org/TR/xhtml1/strict">
<xsl:template match = "/">
<h2> Student information </h2>
<span style = "font-style: italic"> USN: </span>
<xsl:value-of select = "student/USN" /> <br />
<span style = "font-size:20pt;color:blue"> Name: </span>
<xsl:value-of select = "student/name" /> <br />
<span style = "font-size:20pt;color:blue"> Branch: </span>
<xsl:value-of select = "student/branch" /> <br />
<span style = "font-style: italic"> college Name: </span>
<xsl:value-of select = "student/college" /> <br />
<span style = "font-style: italic"> Year of Joining: </span>
<xsl:value-of select = "student/year" /> <br />
<span style = "font-style: italic"> Email-id: </span>
<xsl:value-of select = "student/email" /> <br />
</xsl:template>
</xsl:stylesheet>
