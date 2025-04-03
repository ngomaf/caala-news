<?php

namespace app\controllers;

use resources\libraries\Controller;


class NoticeController extends Controller
{
    public function index():void
    {
        $this->view->render('site/notices');
    }
    
    public function show(string $slug):void
    {
        $notice = [
            'title' => 'Feedback sandwitch: como fazer crítica de forma assertiva?',
            'date' => date('d / m / Y'),
            'content' => "<div data-id='92594e5' data-element_type='widget' data-widget_type='text-editor.default'>
                        <div>
                        <p>PHP, uma das linguagens de programação mais utilizadas na web, é frequentemente alvo de ataques devido à sua popularidade e à facilidade com que erros de segurança podem ser introduzidos no código. A segurança PHP envolve diversas técnicas e práticas que visam minimizar essas vulnerabilidades e proteger aplicações contra ameaças comuns, como injeção de SQL, Cross-Site Scripting (XSS), e Cross-Site Request Forgery (CSRF).</p>
                        <p>Neste artigo, separamos algumas práticas recomendadas que você pode implementar. Para conferi-las, continue a leitura!</p>
                        <h3>1. Validação e Sanitização de Dados</h3>
                        <p>A validação e a sanitização de dados são passos críticos para evitar ataques de injeção e XSS. Todo dado proveniente de usuários deve ser considerado suspeito e, portanto, validado antes de ser processado. </p>
                        <p>Use funções como filter_var() para validar e-mails, URLs e outros tipos de dados. Para sanitização, utilize htmlspecialchars() para evitar a inserção de scripts maliciosos em formulários e páginas web.</p>
                        <h3>2. Utilização de Prepared Statements</h3>
                        <p>A injeção de SQL é uma das técnicas mais antigas e perigosas usadas por atacantes para comprometer a segurança de uma aplicação. </p>
                        <p>A utilização de prepared statements com a biblioteca PDO (PHP Data Objects) ou MySQL é essencial para prevenir esse tipo de ataque. Prepared statements parametrizam as consultas SQL, o que impede que dados maliciosos injetados por um usuário sejam executados como código SQL.</p>
                        <h3>3. Gerenciamento de Sessões</h3>
                        <p>Gerenciar sessões de forma segura é fundamental para proteger informações sensíveis do usuário. Algumas práticas incluem:</p>
                        <ul>
                        <li aria-level='1'>Regeneração de ID de Sessão: regenerar o ID da sessão após login ou ações críticas para evitar ataques de fixação de sessão;</li>
                        <li aria-level='1'>Configurações do PHP: ajustar as configurações do PHP para garantir a segurança da sessão, como session.cookie_httponly, session.cookie_secure e session.use_strict_mode.</li>
                        </ul>
                        <h3>4. Configurações Seguras do PHP</h3>
                        <p>A configuração do PHP pode influenciar significativamente a segurança da sua aplicação. Algumas configurações recomendadas:</p>
                        <ul>
                        <li aria-level='1'>Desativar funções perigosas: desabilitar funções como exec(), shell_exec(), system() que podem ser usadas para executar comandos no servidor;</li>
                        <li aria-level='1'>Erro de relatório: configurar o PHP para não exibir erros detalhados em produção (display_errors = Off) e registrar erros em um log seguro (log_errors = On).</li>
                        </ul>
                        <h3>5. Utilização de Cabeçalhos HTTP de Segurança</h3>
                        <p>Configurar cabeçalhos HTTP de segurança ajuda a mitigar várias formas de ataque. Alguns exemplos:</p>
                        <ul>
                        <li aria-level='1'>Content Security Policy (CSP): restringe fontes de conteúdo, prevenindo ataques XSS;</li>
                        <li aria-level='1'>X-Frame-Options: impede que a página seja carregada em frames, protegendo contra ataques de clickjacking;</li>
                        <li aria-level='1'>Strict-Transport-Security (HSTS): enforce o uso de HTTPS para todas as conexões com o servidor.</li>
                        </ul>
                        <h3>6. Atualizações e Manutenção Regular</h3>
                        <p>Manter o PHP e todas as bibliotecas e frameworks utilizados atualizados é crucial para a segurança. </p>
                        <p>Atualizações frequentes corrigem vulnerabilidades conhecidas e ajudam a proteger seu sistema contra novos tipos de ataques. </p>
                        <p>Automatize o processo de atualização sempre que possível para garantir que sua aplicação esteja sempre protegida!</p>
                        <div data-id='7174be4' data-element_type='widget' data-widget_type='text-editor.default'>
                        <div>
                        <p> </p>
                        <p><strong>Fonte</strong>:</p>
                        <p>https://saveincloud.com/pt/blog/web-aplicacao/seguranca-php-praticas-essenciais/</p>
                        </div>
                        </div>
                        </div>
                        </div>"
        ];

        $this->view->render('site/notice', ['notice' => $notice]);
    }

    public function category(array $cat=[]):void 
    {
        $categories = [
            ['Sociedade', 'sociedade', 230], 
            ['Desporto', 'desporto', 330], 
            ['Cultura', 'cultura', 210], 
            ['Ciência', 'ciencia', 129], 
            ['Arte', 'arte', 592], 
            ['outros', 'outros', 1031]
        ];

        if($cat != []) {
            $selected = [];
            foreach($categories as $value) {
                if($value[1] == $cat[0]) {
                    $selected[] = $value;
                }
            }
        }

        ($cat==[])? 
        $this->view->render('site/noticeCategories', ['categories' => $categories]): 
        $this->view->render('site/noticeCategory', ['categories' => $categories, 'category' => $selected[0]]);
    }
}
