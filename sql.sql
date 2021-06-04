SELECT v.villageId,v.villageName,c.cellName FROM 
villages v INNER JOIN 
cells c ON v.cellId=c.cellId UNION ALL
(SELECT c.cellId,c.cellName,s.sectorName FROM 
cells c INNER JOIN 
sectors s ON c.sectorId=s.sectorId LIMIT 5);

SELECT v.villageId,v.villageName,c.cellName,s.sectorName ,d.districtName, p.provinceName FROM 
villages v INNER JOIN 
cells c ON v.cellId=c.cellId 
 INNER JOIN sectors s ON s.sectorId = c.sectorId
 INNER JOIN 
districts d ON d.districtId = s.districtId INNER  JOIN 
provinces p ON p.provinceId = d.ProvinceId;
 
-- JOIN 
-- districts d ON d.districtId = s.districtId  JOIN 
-- provinces p ON p.provinceId = d.ProvinceId LIMIT 10;