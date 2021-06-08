<body style="margin: 0; padding: 0;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
          <tr>
            <td bgcolor="#7f1d1d" align="center" style="padding: 40px 0 30px 0;">
              <img src="{{asset('images/logo-apu.png')}}" alt="Apu" width="250px"/>
            </td>
          </tr>
          <tr>
            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td>
                    @yield('content')
                  </td>
                </tr>
              </table>
          </tr>
          <tr>
            <td bgcolor="#7f1d1d" style="padding: 20px 20px 20px 20px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td style="color:#fff; font-family: 'Segoe UI';">
                    Visita nuestra página web <a href="" target="_blank" style="color:#fbbf24;">APU ANTASAQA</a> y síguenos en nuestras redes sociales
                  </td>
                  <td align="right">
                    <table border="0" cellpadding="0" cellspacing="0" style="padding:0px 10px;">
                      <tr>
                        <td bgcolor="#fff" style="border-radius:50%">
                          <a href="https://web.facebook.com/cicapuantasaqa" target="_blank">
                            <img src="{{asset('images/social/facebook.png')}}" alt="Facebook" width="30" height="30" style="display: block;" border="0" />
                          </a>
                        </td>
                        <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                        <td  bgcolor="#fff" style="border-radius:50%">
                          <a href="https://www.instagram.com/apuantasaqa/" target="_blank">
                            <img src="{{asset('images/social/instagram.png')}}" alt="Instagram" width="30" height="30" style="display: block;" border="0" />
                          </a>
                        </td>
                        <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                        <td  bgcolor="#fff" style="border-radius:50%">
                            <a href="https://www.youtube.com/channel/UCvY1nlgzRfRgkB9EHUYCRyw" target="_blank">
                              <img src="{{asset('images/social/youtube.png')}}" alt="Youtube" width="30" height="30" style="display: block;" border="0" />
                            </a>
                          </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
    </body>