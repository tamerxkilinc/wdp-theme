<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

$website_type = get_theme_mod( 'select_website_type', 'one' );
if ( $website_type == 'two' ) :
	// Single Page ?>
	<!-- Modal Datenschutz -->
		<div class="modal fade" id="datenschutzModal" tabindex="-1" role="dialog" aria-labelledby="datenschutzModalTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="datenschutzModalTitle">Datenschutz</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<p>Mit dieser Datenschutzerklärung möchten wir Sie über Art, Umfang und Zweck der Verarbeitung von personenbezogenen Daten auf unserer Webseite aufklären. Personenbezogene Daten sind alle Daten, die einen persönlichen Bezug zu Ihnen aufweisen, z. B. Name, Adresse, E-Mail-Adresse oder Nutzerverhalten.</p><h2>Wer bei uns für die Datenverarbeitung verantwortlich ist</h2><p>Verantwortlich für die Datenverarbeitung ist:</p>

					Firmenname<br>
					Hr. Emil Meyer<br>
					Corneliusstraße 64<br>
					40215 Düsseldorf<br>
					Telefon: +49 (0) 211 - 1234 586<br>
					E-Mail: info@firmenname.de<br>
					<br>
					<h2>Kontaktdaten unseres Datenschutzbeauftragten</h2><p>Unseren Datenschutzbeauftragten können Sie per E-Mail oder unter unserer Postadresse mit dem Zusatz „an den Datenschutzbeauftragten“ erreichen.</p><h2>Webhosting</h2><p>Wir bedienen uns zum Vorhalten unserer Onlinepräsenz eines Internet-Service-Providers, auf dessen Server die Webseite gespeichert wird (Hosting) und der unsere Seite im Internet verfügbar macht. Hierbei verarbeitet der Internet-Service-Provider in unserem Auftrag Kontaktdaten, Inhaltsdaten, Vertragsdaten, Nutzungsdaten, Bestandsdaten sowie Meta- und Kommunikationsdaten. Rechtsgrundlage: Rechtsgrundlage für die vorbeschriebene Verarbeitung ist unser berechtigtes Interesse an einer effizienten und sicheren Zurverfügungstellung unseres Onlineangebotes, Art. 6 Abs. 1 lit. f DSGVO i. V. m. Art. 28 DSGVO (Auftragsverarbeitungsvertrag).</p><p></p><div class="ce_text block"><p>Sofern Sie unsere Webseite lediglich informatorisch nutzen, werden von unserem Internet-Service-Provider nur diejenigen personenbezogenen Daten erhoben, die der von Ihnen verwendete Browser an dessen Server übermittelt. Das sind folgende Daten:</p><ul><li>IP-Adresse</li><li>das Datum und die Uhrzeit des Zugriffs auf unsere Internetseite</li><li>Zeitzonendifferenz zur Greenwich Mean Time (GMT)</li><li>Zugriffsstatus (HTTP-Status)</li><li>die übertragene Datenmenge</li><li>der Internet-Service-Provider des zugreifenden Systems</li><li>der von Ihnen verwendete Browsertyp und dessen Version</li><li>das von Ihnen verwendete Betriebssystem</li><li>die Internetseite, von welcher Sie gegebenenfalls auf unsere Internetseite gelangt sind</li><li>die Seiten bzw. Unterseiten, welche Sie auf unserer Internetseite besuchen.</li></ul><p>Die vorgenannten Daten werden als Logfiles auf den Servern unseres Internet-Service-Providers gespeichert. Dies ist erforderlich, um die Webseite auf dem von Ihnen genutzten Endgerät darstellen zu können, sowie die Stabilität und Sicherheit zu gewährleisten. In den vorstehenden Zwecken liegt unser berechtigtes Interesse an der Datenverarbeitung. <strong>Rechtsgrundlage:</strong> Rechtsgrundlage hierfür ist Art. 6 Abs. 1 S. 1 lit. f DSGVO. <strong>Dauer:</strong> Die vorstehenden Daten zur Bereitstellung unserer Webseite werden für die Dauer von 7 Tagen gespeichert und dann gelöscht. <strong>Verhinderung:</strong> Da die Verarbeitung der vorstehenden Daten für die Bereitstellung unseres Internetauftritts zwingend erforderlich ist, besteht kein Widerspruchsrecht.</p></div><p></p><h2>Cookies</h2><p>Unsere Internetseite nutzt Cookies. Bei Cookies handelt es sich um kleine Textdateien, bestehend aus einer Reihe von Zahlen und Buchstaben, die auf dem von Ihnen genutzten Endgerät abgelegt und gespeichert werden. Cookies übertragen weder Viren noch können sie Programme ausführen. Vielmehr dienen sie vorrangig dazu, Informationen zwischen dem von Ihnen genutzten Endgerät und unserer Webseite auszutauschen, um unser Internetangebot für Sie nutzerfreundlicher und effektiver zu machen. Dabei ist zu unterscheiden zwischen temporären (transienten) Cookies uns persistenten Cookies. Zu den transienten Cookies zählen insbesondere die Session-Cookies. Diese speichern eine sogenannte Session-ID, mit welcher sich verschiedene Anfragen Ihres Browsers der gemeinsamen Sitzung zuordnen lassen. Dadurch erkennt unsere Webseite Ihren Rechner wieder, wenn Sie auf unsere Webseite zurückkehren. Die Session-Cookies werden gelöscht, wenn Sie sich ausloggen oder Ihren Browser schließen. Persistente Cookies werden automatisiert nach einer vorgegebenen Dauer gelöscht, die sich je nach Cookie unterscheiden kann. Sie haben die Möglichkeit, diese Cookies in den Sicherheitseinstellungen Ihres Browsers jederzeit zu löschen.</p><p>Die Cookies dienen dazu, unsere Website nutzerfreundlicher zu gestalten. Einige Elemente unserer Internetseite erfordern es, dass der aufrufende Browser auch nach einem Seitenwechsel identifiziert werden kann. In diesen Cookies können insbesondere Informationen zu Spracheinstellungen oder Log-In-Informationen gespeichert sein.</p><p></p><p>In den vorstehenden Zwecken liegt unser berechtigtes Interesse an der Datenverarbeitung. Rechtsgrundlage hierfür ist Art. 6 Abs. 1 S. 1 lit. f DSGVO.</p><p>Da die Cookies auf Ihrem Computer gespeichert werden, haben Sie als Nutzer auch die volle Kontrolle über die Verwendung von Cookies. Sie haben die Möglichkeit, über die Sicherheitseinstellungen Ihres Browsers festzulegen, ob Cookies überhaupt gespeichert werden. Sie können etwa von vornherein keine oder nur auf Nachfrage Cookies akzeptieren oder aber festlegen, dass Cookies nach jedem Schließen Ihres Browsers gelöscht werden. Werden Cookies für unsere Website deaktiviert, können möglicherweise nicht mehr alle Funktionen der Website vollumfänglich genutzt werden.</p><h2>Speicherdauer/Löschung</h2><p>Wir löschen oder sperren Ihre personenbezogenen Daten, sobald der Zweck der Speicherung erreicht ist oder entfällt. Eine darüberhinausgehende Speicherung erfolgt nur, wenn uns dies durch nationale oder europäische Vorschriften aufgegeben wird. Eine Sperrung oder Löschung der Daten erfolgt in diesem Fall dann, wenn die in den jeweiligen Vorschriften vorgeschriebene Speicherfrist abgelaufen ist, es sei denn wir benötigen Ihre Daten zur Erfüllung eines zwischen uns geschlossenen Vertrages oder wenn dies zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen erforderlich ist.</p><h2>Kontaktaufnahme über Kontaktformular, E-Mail, Soziale Medien oder Telefon</h2><p><strong>Umfang:</strong> Soweit Sie das auf unserer Internetpräsenz angebotene Kontaktformular nutzen oder uns per E-Mail, Telefon, oder sozialer Medien ansprechen und uns hierüber personenbezogene Daten zur Verfügung stellen, werden diese Daten zur Verarbeitung Ihrer Anfrage in unserem Hause automatisch gespeichert und weiterverarbeitet. Diese Daten werden nur zur Korrespondenz mit Ihnen verarbeitet. Die Datenübermittlung erfolgt über eine verschlüsselte SSL- Verbindung. Eine Weitergabe Ihrer Daten an Dritte erfolgt nicht. <strong>Zweck:</strong> Ihren Namen benötigen wir, um Sie in unserer Antwort ansprechen zu können. Ihre E-Mail-Adresse benötigen wir, um Ihre Anfrage beantworten zu können. Ihre Telefonnummer benötigen wir, um Ihrer Rückrufbitte nachkommen zu können. <strong>Rechtsgrundlage</strong>: Die Rechtsgrundlage für die vorbeschriebene Nutzung der Daten ist Art. 6 Abs.1 lit. a DSGVO <strong>Löschung: </strong>Die von uns erhobenen personenbezogenen Daten werden gelöscht, sofern sie nicht mehr erforderlich sind. Wir überprüfen die Erforderlichkeit alle 2 Jahre. Außerdem können Sie die Datenverarbeitung jederzeit widerrufen. <strong>Verhinderung: </strong>Sie können die Speicherung und Verarbeitung Ihrer personenbezogenen Daten verhindern, indem Sie davon absehen das Kontaktformular zu nutzen.</p><h2>Ihre Rechte als Nutzer unserer Onlinepräsenz nach der DSGVO</h2><p>Nach der DSGVO stehen Ihnen die nachfolgend aufgeführten Rechte zu, die Sie jederzeit bei dem in Ziffer 1. dieser Datenschutzerklärung genannten Verantwortlichen geltend machen können:</p><ul><li><strong>Recht auf Auskunft:</strong> Sie können nach Art. 15 DSGVO eine Bestätigung darüber verlangen, ob und welche personenbezogenen Daten wir von Ihnen verarbeiten. Darüber hinaus können Sie von uns unentgeltlich Auskunft über die Verarbeitungszwecke, die Kategorie der personenbezogenen Daten, die Kategorien von Empfängern, gegenüber denen Ihre Daten offengelegt wurden oder werden, die geplante Speicherdauer, das Bestehen eines Rechts auf Berichtigung, Löschung, Einschränkung der Verarbeitung oder Widerspruch, das Bestehen eines Beschwerderechts sowie die Herkunft ihrer Daten, sofern diese nicht bei uns erhoben wurden, verlangen. Ferner steht Ihnen ein Auskunftsrecht darüber zu, ob Ihre personenbezogenen Daten an ein Drittland oder an eine internationale Organisation übermittelt wurden. Sofern dies der Fall ist, steht Ihnen das Recht zu, Auskunft über die geeigneten Garantien im Zusammenhang mit der Übermittlung zu erhalten.</li><li><strong>Recht auf Berichtigung:</strong> Gemäß Art. 16 DSGVO können Sie die Berichtigung unrichtiger oder Vervollständigung unvollständiger der bei uns gespeicherten und Sie betreffenden personenbezogenen Daten verlangen.</li><li><strong>Recht auf Löschung:</strong> Gemäß Art. 17 DSGVO steht Ihnen das Recht zu, die Löschung Ihrer bei uns gespeicherten personenbezogenen Daten zu verlangen, soweit wir deren Verarbeitung nicht zu folgenden Zwecken benötigen:<ul><li>zur Erfüllung einer rechtlichen Verpflichtung,</li><li>zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen,</li><li>zur Ausübung des Rechts auf freie Meinungsäußerung und Information oder</li><li>aus Gründen der in Art. 17 Abs. 3 lit c und d DSGVO genannten Fälle des öffentlichen Interesses.</li></ul></li><li><strong>Recht auf Einschränkung:</strong> Gemäß Art. 18 DSGVO haben Sie das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen, wenn<ul><li>die Richtigkeit der Daten von Ihnen bestritten wird, und zwar für eine Dauer, die es uns ermöglicht, die Richtigkeit der personenbezogenen Daten zu überprüfen,</li><li>die Verarbeitung Ihrer Daten unrechtmäßig ist, Sie aber deren Löschung ablehnen und stattdessen die Einschränkung der Nutzung der Daten verlangen,</li><li>wir die personenbezogenen Daten für die Zwecke der Verarbeitung nicht länger benötigen, Sie die Daten jedoch zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen benötigen</li><li>Sie gemäß Art. 21 DSGVO Widerspruch gegen die Verarbeitung Ihrer Daten eingelegt haben, es aber noch nicht feststeht, ob die berechtigten Gründe, die uns trotz Ihres Widerspruches zu einer weiteren Verarbeitung berechtigten, Ihre Rechte überwiegen.</li></ul></li>
						<li><strong>Recht auf Unterrichtung:</strong> Sofern Sie das Recht auf Berichtigung, Löschung oder Einschränkung der Verarbeitung gegenüber uns geltend gemacht haben, sind wir verpflichtet, allen Empfängern, denen gegenüber die Sie betreffenden personenbezogene Daten offengelegt wurden, die von Ihnen verlangte Berichtigung oder Löschung der Daten oder deren Einschränkung der Verarbeitung mitzuteilen, es sei denn, dies erweist sich als unmöglich oder ist mit einem unverhältnismäßigen Aufwand verbunden. Ihnen steht das Recht zu, von uns über diese Empfänger unterrichtet zu werden.</li><li><strong>Recht auf Datenübertragbarkeit:</strong> Gemäß Art. 20 DSGVO können Sie verlangen, dass wir die Sie betreffenden personenbezogenen Daten, die Sie uns bereitgestellt haben, in einem strukturierten, gängigen und maschinenlesebaren Format zu erhalten oder die Übermittlung an einen anderen Verantwortlichen zu verlangen.</li><li><strong>Beschwerderecht</strong>: Nach Art. 77 DSGVO haben Sie das Recht, sich bei einer Aufsichtsbehörde zu beschweren. Hierfür können Sie sich an die Aufsichtsbehörde Ihres üblichen Aufenthaltsortes, Ihres Arbeitsplatzes oder unseres Firmensitzes wenden.</li></ul><h2>Widerrufsrecht</h2><p>Gemäß Art. 7 Abs. 3 DSGVO steht Ihnen das Recht zu, Ihre erteilte Einwilligung in die Verarbeitung Ihrer Daten jederzeit uns gegenüber zu widerrufen. Der von Ihnen erklärte Widerruf ändert nichts an der Rechtmäßigkeit der bis zum Widerruf erfolgten Verarbeitung Ihrer personenbezogenen Daten.</p><h2>Widerspruchsrecht</h2><p>Sie haben das Recht, aus Gründen, die sich aus Ihrer besonderen Situation ergeben, jederzeit gegen die Verarbeitung der Sie betreffenden personenbezogenen Daten, die aufgrund einer Interessenabwägung (Art. 6 Abs. 1 lit. f DSGVO) erfolgt, Widerspruch einzulegen. Dies ist insbesondere dann der Fall, wenn die Datenverarbeitung nicht zur Erfüllung eines Vertrages erforderlich ist. Sofern Sie von Ihrem Widerspruchsrecht Gebrauch machen, bitten wir Sie um die Darlegung der Gründe. Wir werden Ihre personenbezogenen Daten dann nicht mehr verarbeiten, es sei denn, wir können Ihnen gegenüber nachweisen, dass zwingende schutzwürdige Gründe an der Datenverarbeitung Ihre Interessen und Rechte überwiegen.</p><p><span style="text-decoration: underline;"><strong>Unabhängig vom vorstehend Gesagten, haben Sie das jederzeitige Recht, der Verarbeitung Ihrer personenbezogenen Daten für Zwecke der Werbung und Datenanalyse zu widersprechen.</strong></span></p><p>Ihren Widerspruch richten Sie bitte an die oben angegebene Kontaktadresse des Verantwortlichen.</p><h2>Sicherheitsmaßnahmen</h2><p>Wir treffen im Übrigen technische und organisatorische Sicherheitsmaßnahmen nach dem Stand der Technik, um die Vorschriften der Datenschutzgesetze einzuhalten und Ihre Daten gegen zufällige oder vorsätzliche Manipulationen, teilweisen oder vollständigen Verlust, Zerstörung oder gegen den unbefugten Zugriff Dritter zu schützen.</p><h2>Aktualität und Änderung dieser Datenschutzerklärung</h2><p>Diese Datenschutzerklärung ist aktuell gültig und hat den Stand Juni 2018. Aufgrund geänderter gesetzlicher bzw. behördlicher Vorgaben kann es notwendig werden, diese Datenschutzerklärung anzupassen.</p><p>Diese Datenschutzerklärung wurde mit Hilfe des <a href="dsgvo-datenschutz-generator/">Datenschutzerklärungs-Generators</a> von <a title="SOS Recht" href="https://datenschutz.sos-recht.de" target="_blank" class="externalLink">SOS Recht</a> erstellt. SOS Recht ist ein Angebot der <a title="MMR Müller Müller Rößner Rechtsanwälte Partnerschaft" href="http://mueller-roessner.net" target="_blank" class="externalLink">MMR Müller Müller Rößner Rechtsanwälte Partnerschaft</a> mit Sitz in Berlin.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Impressum -->
		<div class="modal fade" id="impressumModal" tabindex="-1" role="dialog" aria-labelledby="impressumModalTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="impressumModalTitle">Impressum</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h3>Verantwortlich für den Inhalt nach §5 TMG:</h3>
						Firmenname<br>
						Hr. Emil Meyer<br>
						Corneliusstraße 64<br>
						40215 Düsseldorf<br>
						Telefon: +49 (0) 211 - 1234 586<br>
						Fax: +49 (0) 211 - 1234 587
						E-Mail: info@firmenname.de<br>
						<br>
						Finanzamt Düsseldorf<br>
						USt-ID: DE XXXXXXXXXXX<br>
						Handelsregisternummer: HRB XYXY<br>
						<br>

						<h3>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:</h3>
						Firmenname<br>
						Hr. Emil Meyer<br>
						Corneliusstraße 64<br>
						40215 Düsseldorf<br>
						Telefon: +49 (0) 211 - 1234 586<br>
						Fax: +49 (0) 211 - 1234 587
						E-Mail: info@firmenname.de<br>
						<br>
						Finanzamt Düsseldorf<br>
						USt-ID: DE XXXXXXXXXXX<br>
						Handelsregisternummer: HRB XYXY<br>
						<br>

						Der Unternehmer verpflichtet sich nicht, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.

						Plattform zur Online-Streitbeilegung der Europäischen Kommission: <a href="http://ec.europa.eu/consumers/odr/" target="_blank">http://ec.europa.eu/consumers/odr/</a>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
					</div>
				</div>
			</div>
		</div>
<?php
endif;

?>



<?php
	$footer_temp = get_theme_mod('footer_template','one');

	switch ($footer_temp) {
		case 'one': 
			get_footer('one');
			break;
		
		case 'two':
			get_footer('two');
			break;
			
		default:
			get_footer('one');
	}

wp_footer(); ?>

</body>
</html>
