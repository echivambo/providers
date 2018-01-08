DELIMITER //
create trigger desabilitar_condigo
AFTER INSERT ON providers
FOR EACH ROW BEGIN

    UPDATE prov_cods SET status = '0' WHERE email=new.email;

END//
DELIMITER ;