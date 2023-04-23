-- PESQUISAR FUNCIONARIO POR GERENCIA 22/04/2023

select g.nm_gerente as 'Gerencia',f.cd_funcionario, f.nm_nome, f.nm_cargo, f.dt_emissao_contratual, f.nm_sexo, f.cd_data_nascimento  
from tb_gerente as g
JOIN tb_funcionario as f
on   f.cd_gerente = g.cd_gerente
where g.cd_gerente =1;

--pesquisa para abrir o modal

SELECT g.nm_gerente, f.cd_funcionario, f.nm_nome, f.nm_cargo, f.dt_emissao_contratual, f.nm_sexo, f.cd_data_nascimento, f.cd_cpf,
f.cd_credencial, f.cd_email_funcionario, f.cd_senha_funcionario, f.cd_telefone, f.img_imagem, b.cd_bairro, g.cd_gerente
    FROM tb_gerente as g
    JOIN tb_funcionario as f
    ON   f.cd_gerente = g.cd_gerente
    JOIN tb_bairro as b
    on f.cd_funcionario = b.cd_bairro
    WHERE g.cd_gerente = 1 ORDER BY f.cd_funcionario;
    --OU
    WHERE f.cd_credencial = '30039' ORDER BY f.cd_funcionario;