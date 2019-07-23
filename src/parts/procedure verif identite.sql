CREATE OR REPLACE PROCEDURE VERIF_IDENTITE (id_carte in int(11))
is 
x int(11)
begin
select count(*) into x from identite where identite.id_carte=id_carte; 
if (x==0)
return true;
else 
return false; 
end if;
 
end; 