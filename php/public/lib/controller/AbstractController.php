namespace Plugo\Controller;

abstract class AbstractController {

	protected function renderView(string $template, array $data = []): string {
		$templatePath = dirname(__DIR__, 2) . '/templates/' . $template;
		return require_once dirname(__DIR__, 2) . '/templates/layout.php';
	}

}
