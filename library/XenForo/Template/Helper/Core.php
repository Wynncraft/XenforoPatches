1856		- 		if (!isset($user['gender']))
1857		- 		{
1858		- 			$user['gender'] = '';
1859		- 		}
1860		- 
1861		- 		switch ($user['gender'])
1862		- 		{
1863		- 			case 'male':
1864		- 			case 'female':
1865		- 				$gender = $user['gender'] . '_';
1866		- 				break;
1867		- 
1868		- 			default:
1869		- 				$gender = '';
1870		- 				break;
1871		- 		}
1872		- 
1873	1856	  		if (!$imagePath = self::styleProperty('imagePath'))
1874	1857	  		{
1875	1858	  			$imagePath = 'styles/default';
1876	1859	  		}
1877	1860	  
1878		- 		return "{$imagePath}/xenforo/avatars/avatar_{$gender}{$size}.png";
1861	+ 		$sizepx = XenForo_Model_Avatar::getSizeFromCode($size);
1862	+ 
1863	+ 		return "http://wynncraft.com/api/avatar/{$user['username']}/{$sizepx}.png";
