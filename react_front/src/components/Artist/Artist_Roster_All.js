import React from 'react';
import { Link } from 'react-router-dom'
import pagin from './pagin.css';
class Artist_Roster_All extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			error: null,
			isLoaded: false,
			items: [],
		};
		this.url = this.props.match.params.page ? `http://localhost/api/artists/read_paging.php?page=${this.props.match.params.page}`: `http://localhost/api/artists/read_paging.php`;
	}

	componentDidMount() {
		fetch(this.url)
			.then(res => res.json())
			.then(
				(result) => {
					console.log(result);
					this.setState({
						isLoaded: true,
						items : result
					});
				},
				(error) => {
					this.setState({
						isLoaded: true,
						error
					});
				}
			)
	}

	render() {
		const { error, isLoaded, items } = this.state;
		if (error) {
			return <div>Error: {error.message}</div>;
		} else if (!isLoaded) {
			return <div>Loading...</div>;
		} else {
			return (
				<div>
				<ul>
					{items.map(artist => (
						<li	 key={artist.id}>
							<p>{artist.name}</p>
							<p>{artist.description}</p>
							<p>{artist.bio}</p>
							<Link to={`/artist/${artist.id}`}><img src={artist.photo} /></Link>
						</li>
					))}
				</ul>
				<div className="pagination">
					{items[items.length - 1]['paging']['pages'].map(page =>(
							<Link to={page.url} >{page.page}</Link>
						))}
				</div>
			</div>
			);
		}
	}
}

export default Artist_Roster_All;