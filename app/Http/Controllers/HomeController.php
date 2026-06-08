<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Exibe a página inicial
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Dados que podem ser enviados para a view
        $stats = [
            'empresas_atendidas' => 150,
            'sla_uptime' => '99.9',
            'anos_experiencia' => 10,
        ];

        $servicos = [
            [
                'titulo' => 'Infraestrutura Microsoft',
                'descricao' => 'Active Directory, Windows Server, Hyper-V',
                'icone' => 'server',
            ],
            [
                'titulo' => 'Redes MikroTik',
                'descricao' => 'VPN, Firewall, Gerenciamento Remoto',
                'icone' => 'network',
            ],
            [
                'titulo' => 'Segurança Fortinet',
                'descricao' => 'FortiGate NGFW, IPS/IDS, SSL VPN',
                'icone' => 'shield',
            ],
        ];

        $cases = [
            [
                'nome' => 'Clínica Médica',
                'local' => 'Salvador, Bahia',
                'depoimento' => 'A E-TI SOLUTI transformou nossa infraestrutura...',
                'uptime' => '99.9%',
                'economia' => '60%',
            ],
            [
                'nome' => 'Empresa de Logística',
                'local' => 'Lauro de Freitas, BA',
                'depoimento' => 'Implementaram nossa rede MikroTik...',
                'filiais' => 5,
                'performance' => '80%',
            ],
        ];

        return view('home', compact('stats', 'servicos', 'cases'));
    }
}
