import React from 'react'
import { Switch, Route } from 'react-router-dom'
import Genre_ById from './Genre_ById'
import Genre_Roster_All from './Genre_Roster_All'

const Genre = () => (
	<Switch>
		<Route exact path='/genre' component={Genre_Roster_All}/>
		<Route path='/genre/:id' component={Genre_ById}/>
	</Switch>
);

export default Genre;